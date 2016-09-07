<?php

namespace App\Console\Commands;

use App\Models\Author;
use App\Models\Category;
use App\Models\Website;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class GenerateArticle extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'article:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Variable to store user input.
     *
     * @var array;
     */
    protected $userInput;

    /**
     * USer input, encoded in JSON format.
     *
     * @var String
     */
    protected $jsonEncodedUserInput;

    /**
     * @var Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->userInput = [];
        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->collectUserInput();
        $this->writeFile();
    }

    protected function writeFile()
    {
        $ds = DIRECTORY_SEPARATOR;
        $path = 'data' . $ds . 'articles' . $ds . $this->userInput['json_file_name'];

        $this->makeDirectory($path);

        $this->files->put($path, $this->jsonEncodedUserInput);
    }

    protected function makeDirectory($path)
    {
        if (! $this->files->isDirectory(dirname($path))) {
            $this->info("Folder '" . dirname($path) . "'' not exists. Creating.");

            $this->files->makeDirectory(dirname($path), 0777, true, true);
        } else {
            $this->info("Folder '" . dirname($path) . "' already exists. Using that folder.");
        }
    }

    protected function collectUserInput()
    {
        $this->line("Great. Thanks for contributing.");
        $this->line("Please answer few simple questions to generate JSON file for new article.");

        $this->info(
            "Please note, this program looks for the database to ensure we do not add any redundant information in database. "
            . "Thus, program depends on updated database and we expect your local database is updated."
        );

        if (!$this->confirm("Are you sure your local database is updated? [y|N]")) {
            $this->line("Thanks for correct answer.");
            $this->error("Although we can't go further with outdated database, updating database is very simple.");
            $this->line("Please visit 'Set project locally' section of http://github.com/phpreboot/website for information about updating database.");
            exit();
        }

        $this->userInput['author'] = $this->collectAuthorInfo();
        $this->userInput['website'] = $this->collectWebsiteInfo();
        $this->userInput['category'] = $this->collectCategoryInfo();
        $this->collectArticleInfo();
        $this->encodeUserInput();
    }

    protected function encodeUserInput()
    {
        $this->jsonEncodedUserInput = json_encode($this->userInput, JSON_PRETTY_PRINT);
    }

    protected function collectArticleInfo()
    {
        $this->userInput['url'] = $this->ask("Enter exact URL of the article.");
        $this->userInput['title'] = $this->ask("Enter title of the article.");
        $this->userInput['published_at'] = $this->ask("Enter date when article was published (format: yyyy-mm-dd).");
        $this->userInput['description'] = $this->ask("Enter description (Please careful. It will be displayed on the page. Keep it short but meaningful.");
        $fileNumber = $this->ask('Enter next file number. File will be saved as data/articles/yyyymm/<filenumber>.json');
        $publishDateArray = explode('-', $this->userInput['published_at']);
        $this->userInput['json_file_name'] = $publishDateArray[0] . $publishDateArray[1] . '/' . $fileNumber . '.json';
    }

    protected function collectCategoryInfo()
    {
        $this->line("We do not allow adding new category as that has to be done by admin.");
        $this->line("Next we need to enter category id.");
        if ($this->confirm("Do you want to show categories? [y|N]")) {
            $categories = Category::all(["id", "name", "description"]);
            $headers = [["id", "name", "description"]];
            $this->table($headers, $categories->toArray());
        }
        $categoryId = $this->ask("Enter category id");
        
        $category = Category::find($categoryId);
        
        return [
            "id" => $category->id,
            "name" => $category->name,
            'description' => $category->description
        ];
    }

    protected function collectWebsiteInfo()
    {
        $websiteArray = [];

        $this->line("Let's first check if website is available in database or not.");
        $websiteDomain = $this->ask("Enter website (without http(s), www or /. Just domain and tld like 'phpreboot.com'.");

        $websites = Website::where('site_url', 'like', '%' . $websiteDomain . '%')->get();

        if (count($websites) > 0) {
            return $this->getExistingWebsite($websites, $websiteDomain);
        } else {
            return $this->getNewWebsite($websiteDomain);
        }
    }

    protected function getNewWebsite($websiteDomain)
    {
        $websiteArray = [];
        $websiteArray['name'] = $this->ask("What is suitable name of the website. (Ideally name should uniquely identify website.)");
        $websiteArray['site_url'] = $websiteDomain;

        if($this->confirm("It there and RSS feed of the website? (And you know that) y|N")) {
            $websiteArray['feed_url'] = $this->ask("Enter feed_url.");
        } else {
            $websiteArray['feed_url'] = "";
        }

        return $websiteArray;
    }

    protected function getExistingWebsite($websites, $websiteDomain)
    {
        $websiteArray = [];

        $this->line("We find matching websites. Please review.");

        $headers = ['id', 'name', 'site_url', 'feed_url', 'created_at', 'updated_at'];
        $this->table($headers, $websites->toArray());

        if ($this->confirm("Do you mean any of above website? [y|N]")) {
            $websiteId = $this->ask("Enter 'id' of website from above table.");

            $website = Website::find($websiteId);

            $websiteArray['id'] = $website->id;
            $websiteArray['name'] = $website->name;
            $websiteArray['site_url'] = $website->site_url;
            $websiteArray['feed_url'] = $website->feed_url;

            return $websiteArray;
        } else {
            return $this->getNewWebsite($websiteDomain);
        }
    }

    protected function collectAuthorInfo()
    {
        $enteredAuthorName = $this->ask("Enter author name?");
        $enteredAuthorTwitter = $this->ask("Enter author's twitter handle (without '@').");

        $authorArray = [
            "name" => $enteredAuthorName
        ];

        $author = Author::where('name', 'like', '%' . $enteredAuthorName . '%')
                    ->orWhere('twitter', 'like', '%' . $enteredAuthorTwitter . '%')
                    ->get();

        if (count($author) > 0) {
            $this->line("We find this or similar author in the database. Please check if you mean any one of them:");
            $headers = ["id", "name", "twitter", "created_at", "updated_at"];
            $this->table($headers, $author->toArray());

            if ($this->confirm("Do you mean any of above author? [y|N]")) {
                $authorId = $this->ask("Enter 'id' of author from above table.");
                
                $author = Author::find($authorId);

                $authorArray['id'] = $author->id;
                $authorArray['name'] = $author->name;
                $authorArray['twitter'] = ($author->twitter == null || $author->twitter == '') ? $enteredAuthorTwitter : $author->twitter;
                return $authorArray;
            }
        }

        $authorArray['name'] = $enteredAuthorName;
        $authorArray['twitter'] = $enteredAuthorTwitter;

        return $authorArray;
    }
}
