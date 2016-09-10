<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use App\Models\Magazine;
use App\Models\Website;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ImportArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'article:import {fileName : File name to be imported.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports an article file in JSON format.';

    /**
     * Folder where generated file is stored.
     *
     * @var integer
     */
    protected $folder;

    /**
     * file to be imported.
     *
     * @var integer
     */
    protected  $file;

    /**
     * Path of file to be imported.
     *
     * @var string
     */
    protected $path;

    /**
     * Json imported from $path.
     *
     * @var string JSON
     */
    protected $json;

    /**
     * @var App\Models\Author
     */
    protected $author;

    /**
     * @var App\Models\Website
     */
    protected $website;

    /**
     * @var App\Models\Category
     */
    protected $category;

    /**
     * @var App\Models\Magazine
     */
    protected $magazine;

    /**
     * Minimum year. Years before that are not supported.
     */
    const MIN_YEAR = 2016;

    /**
     * Maximum year. Years above that are not supported.
     */
    const MAX_YEAR = 2016;

    const SHOUT_SILENT  = 0;
    const SHOUT_INFO    = 1;
    const SHOUT_WARNING = 2;
    const SHOUT_ERROR   = 3;

    protected $shout;

    public function __construct()
    {
        parent::__construct();
        $this->shout = self::SHOUT_INFO;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $fileName = $this->argument('fileName');

        $this->validateFileName($fileName);
        $this->importFile();
        $this->importAuthor();
        $this->importWebsite();
        $this->importCategory();
        $this->importMagazine();
        $this->importArticle();
    }

    protected function importArticle()
    {
        if ($this->shout >= self::SHOUT_INFO) {
            $this->info("Importing article.");
        }

        $article = new Article();

        // ToDo: Validate these fields.
        $article->url = $this->json['url'];
        $article->title = $this->json['title'];
        $article->published_at = $this->json['published_at'];
        $article->description = $this->json['description'];
        $article->json_file_name = $this->json['json_file_name'];

            $this->author->save();
        $this->category->save();
        $this->website->save();

        $this->magazine->no_of_articles++;
        $this->magazine->save();

        $article->category_id = $this->category->id;
        $article->author_id = $this->author->id;
        $article->website_id = $this->website->id;
        $article->magazine_id = $this->magazine->id;

        $article->save();
    }

    protected function importMagazine()
    {
        if ($this->shout >= self::SHOUT_INFO) {
            $this->info("Importing magazine.");
        }

        // Publish_at format must be yyyy-mm-dd. Lets break & validate.
        $publishDateArray = explode('-' , $this->json['published_at']);

        if (count($publishDateArray) != 3) {
            $this->error("publish_at key is not valid.");
            exit();
        }

        // Make two digit year, as needed in magazine table.
        $year = (int)($publishDateArray[0]);
        $twoDigitYear = ($year > 2000) ? ($year - 2000) : $year;

        if ($year < self::MIN_YEAR || $year > self::MAX_YEAR) {
            $this->error("Article published outside allowed publication period.");
            exit();
        }

        $month = (int)($publishDateArray[1]);

        if ($month < 1 || $month > 12) {
            $this->error("Month under key 'published_at' is not correct.");
            exit();
        }

        $longMonths = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ];

        $shortMonth = [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec"
        ];

        $name = $longMonths[$month - 1] . ' ' . $year;
        $shortName = $shortMonth[$month - 1] . $twoDigitYear;

        $magazine = Magazine::where('short_name' , $shortName)->first();

        if ($magazine == null) {
            $this->info("Magazine do not exist, creating new.");
            $magazine = new Magazine();
            $magazine->name = $name;
            $magazine->short_name = $shortName;
            $magazine->no_of_articles = 0;
            $magazine->created_at = Carbon::now()->format('Y-m-d H:i:s');
        } else {
            $this->info("Magazine exists with id = $magazine->id.");
            // ToDo: Magazine already exist. Validate.
        }

        $this->magazine = $magazine;
    }

    protected function importCategory()
    {
        if ($this->shout >= self::SHOUT_INFO) {
            $this->info("Importing category.");
        }

        if (isset($this->json['category']['id'])) {
            // category already exist in database. Confirm it is same.

            try {
                $category = Category::findOrFail($this->json['category']['id']);
            } catch (ModelNotFoundException $e) {
                $this->error("No category with id '" . $this->json['category']['id'] . "' exist. Exiting.");
                exit();
            }

            // Validate input author name is same as in database.
            if ($category->name == $this->json['category']['name']) {
                $this->category = $category;
                return;
            }

            // ToDo: Author name is different. Give edit/continue/stop choice to user.
            // Current default: continue.
            $this->category = $category;
            return;
        }

        // Author not set, lets create new author.

        $this->category = new category();
        $this->category->name = $this->json['category']['name'];

        // Not saving category right now. Lets first validate other things, and save everything at once.
    }

    protected function importWebsite()
    {
        if ($this->shout >= self::SHOUT_INFO) {
            $this->info("Importing website.");
        }
        
        if (isset($this->json['website']['id'])) {
            // Website already exist in database. Confirm it is same.

            try {
                $website = Website::findOrFail($this->json['website']['id']);
            } catch (ModelNotFoundException $e) {
                $this->error("No website with id '" . $this->json['website']['id'] . "' exist. Exiting.");
                exit();
            }

            // Validate input website is same
            if (
                $website->name == $this->json['website']['name']
                && $website->site_url == $this->json['website']['site_url']
                && $website->feed_url == $this->json['website']['feed_url']
            ) {
                $this->website = $website;
                return;
            }

            // ToDo: Author name/site_url/feed_url is different. Give edit/continue/stop choice to user.
            // Current default: continue.
            $this->website = $website;
            return;
        }

        $this->website = new Website();
        $this->website->name = $this->json['website']['name'];
        $this->website->site_url = $this->json['website']['site_url'];
        $this->website->feed_url = $this->json['website']['feed_url'];

        // Not saving website right now. Lets first validate other things, and save everything at once.
    }

    protected function importAuthor()
    {
        if ($this->shout >= self::SHOUT_INFO) {
            $this->info("Importing author.");
        }

        if (isset($this->json['author']['id'])) {
            // Author already exist in database. Confirm it is same.

            try {
                $author = Author::findOrFail($this->json['author']['id']);
            } catch (ModelNotFoundException $e) {
                $this->error("No author with id '" . $this->json['author']['id'] . "' exist. Exiting.");
                exit();
            }

            // Validate input author name is same as in database.
            if ($author->name == $this->json['author']['name']) {
                // Issue 76: twitter handle
                // Check is needed due to old JSON files made during Oct and Nov 2016.
                // ToDo: Update JSON files and remove this check.
                if (isset($this->json['author']['twitter'])) {
                    $author->twitter = $this->json['author']['twitter'];
                }

                $this->author = $author;
                return;
            }

            // ToDo: Author name is different. Give edit/continue/stop choice to user.
            // Current default: continue.
            $this->author = $author;
            return;
        }

        // Author not set, lets create new author.

        $this->author = new Author();
        $this->author->name = $this->json['author']['name'];
        // Issue 76: twitter handle
        // Check is needed due to old JSON files made during Oct and Nov 2016.
        // ToDo: Update JSON files and remove this check.
        $this->author->twitter = isset($this->json['author']['twitter']) 
                ? $this->json['author']['twitter'] 
                : null;

        // Not saving author right now. Lets first validate other things, and save everything at once.
    }

    protected function importFile()
    {
        if ($this->shout >= self::SHOUT_INFO) {
            $this->info("importing file.");
        }

        $json = file_get_contents($this->path);

        $this->json = json_decode($json, true);

        $this->validateJson();
    }

    /**
     * Confirm JSON contains all necessary fields.
     */
    protected function validateJson()
    {
        if ($this->shout >= self::SHOUT_INFO) {
            $this->info("Validating JSON");
        }

        // Check if file contains valid JSON.
        if (!is_array($this->json)) {
            $this->error("File do not contain valid JSON format.");
            exit();
        }

        // Check author exist
        if (!isset($this->json['author'])) {
            $this->error("Error: File do not have mandatory 'author' key.");
            exit;
        }

        // Check author name is present
        if (!isset($this->json['author']['name'])) {
            $this->error("Error: File do not have mandatory 'name' key, under 'author' key.");
            exit;
        }

        // In issue 76, we added twitter.
        // We can't validate author->twitter as old migration files do not have them.
        // ToDo: We need to add twitter in old migration files (in Oct & Nov 2016) and validate twitter.

        // Check Website exist
        if (!isset($this->json['website'])) {
            $this->error("Error: File do not have mandatory 'website' key.");
            exit;
        }

        // Check Website name is present
        if (!isset($this->json['website']['name'])) {
            $this->error("Error: File do not have mandatory 'name' key, under 'website' key.");
            exit;
        }

        // Check Website site_url is present
        if (!isset($this->json['website']['site_url'])) {
            $this->error("Error: File do not have mandatory 'site_url' key, under 'website' key.");
            exit;
        }

        // Check Website name is present
        if (!isset($this->json['website']['feed_url'])) {
            $this->error("Error: File do not have mandatory 'feed_url' key, under 'website' key.");
            exit;
        }

        // Check author exist
        if (!isset($this->json['category'])) {
            $this->error("Error: File do not have mandatory 'category' key.");
            exit;
        }

        // Check author name is present
        if (!isset($this->json['category']['name'])) {
            $this->error("Error: File do not have mandatory 'name' key, under 'category' key.");
            exit;
        }

        // Check author exist
        if (!isset($this->json['url'])) {
            $this->error("Error: File do not have mandatory 'url' key.");
            exit;
        }

        // Check author exist
        if (!isset($this->json['title'])) {
            $this->error("Error: File do not have mandatory 'title' key.");
            exit;
        }

        // Check author exist
        if (!isset($this->json['published_at'])) {
            $this->error("Error: File do not have mandatory 'published_at' key.");
            exit;
        }

        // Check author exist
        if (!isset($this->json['description'])) {
            $this->error("Error: File do not have mandatory 'description' key.");
            exit;
        }
    }

    /**
     * Check input file name is valid.
     *
     * @param $fileName
     */
    protected function validateFileName($fileName)
    {
        if ($this->shout >= self::SHOUT_INFO) {
            $this->info("Validating input file name.");
        }

        $input = explode("-", $fileName);

        if (count($input) != 2) {
            $this->error("Error: Incorrect file name.");
            $this->error("Correct format: 'yyyymm-x'.");
            exit();
        }

        $this->folder = (int)$input[0];
        $this->file = (int)$input[1];

        $year = (int)($this->folder / 100);

        if ($year < self::MIN_YEAR || $year > self::MAX_YEAR) {
            $this->error("Year is not correct.");
            exit();
        }

        $month = $this->folder - ($year * 100);

        if ($month < 1 || $month > 12) {
            $this->error("Month is not correct.");
            exit();
        }

        //ToDo: Invalidate future months. Example, during August 16, articles should not be added for September 16.

        $this->validateFileExists();
    }

    /**
     * Confirm input file format is correct and file really exists.
     */
    protected function validateFileExists()
    {
        $ds = DIRECTORY_SEPARATOR;
        
        $this->path = base_path('data' . $ds . 'articles' . $ds . $this->folder . $ds . $this->file . '.json');

        if (!file_exists($this->path)) {
            $this->error("File '$this->path' does not exist.");
            exit();
        }
    }
}
