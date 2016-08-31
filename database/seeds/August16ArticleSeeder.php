<?php

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use App\Models\Magazine;
use App\Models\Website;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

/**
 * This seeder is supposed to seed database for local development purpose. It must not be executed
 * on live site. On live site, seeders are to be selectively executed one by one.
 *
 * On local site, this seeder adds 5 articles in August magazine. Hope it is sufficient for
 * local development purpose.
 */
class August16ArticleSeeder extends Seeder
{
    /**
     * There are 5 authors to be added in August 2016 issue through seeder.
     * format: author => website
     */
    private $authors = [
        'Samuel Oloruntoba' => 'Scotch IO',
        'Matthew Setter' => 'Master Zend Framework',
        'Dries Vints' => 'DriesVints.com',
        'Bruno Skvorc' => 'SitePoint',
        'Reza Lavaryan' => 'SitePoint',
    ];

    /**
     * There are 4 websites to be added.
     */
    private $websites = [
        [
            'name' => 'Scotch IO',
            'siteUrl' => 'https://scotch.io',
            'feedUrl' => '',
        ],
        [
            'name' => 'Master Zend Framework',
            'siteUrl' => 'http://www.masterzendframework.com/',
            'feedUrl' => '',
        ],
        [
            'name' => 'DriesVints.com',
            'siteUrl' => 'https://driesvints.com/',
            'feedUrl' => '',
        ],
        [
            'name' => 'SitePoint',
            'siteUrl' => 'https://www.sitepoint.com',
            'feedUrl' => '',
        ]
    ];

    /**
     * Articles to be Ssaved
     */
    private $articles = [
        [
            'magazine' => 'August 2016',
            'author' => 'Samuel Oloruntoba',
            'website' => 'Scotch IO',
            'category' => 'Laravel',
            'url' => 'https://scotch.io/tutorials/easy-and-fast-emails-with-laravel-5-3-mailables',
            'title' => 'Easy and Fast Emails with Laravel 5.3 Mailables',
            'publish_date' => '2016-08-25',
            'description' => 'In a new blog post on Scotch.io, Samuel Oloruntoba described using Laravel 5.3 Mailable.',
        ],
        [
            'magazine' => 'August 2016',
            'author' => 'Matthew Setter',
            'website' => 'Master Zend Framework',
            'category' => 'Zend Expressive',
            'url' => 'http://www.masterzendframework.com/using-eloquent-with-expressive/',
            'title' => 'How To Use Laravel’s Eloquent ORM with Zend Expressive',
            'publish_date' => '2016-08-22',
            'description' => 'In the new post on his blog, Matthew explained how to use Larave\'s Eloquent ORM on Zend Expressive Framework.',
        ],
        [
            'magazine' => 'August 2016',
            'author' => 'Dries Vints',
            'website' => 'DriesVints.com',
            'category' => 'Laravel',
            'url' => 'https://driesvints.com/blog/two-tips-to-speedup-your-laravel-tests/',
            'title' => 'Two tips to speedup your Laravel tests',
            'publish_date' => '2016-08-24',
            'description' => 'In the new post on his blog, Dries Vints provided two quick tips to speed up Laravel tests.',
        ],
        [
            'magazine' => 'August 2016',
            'author' => 'Bruno Skvorc',
            'website' => 'SitePoint',
            'category' => 'Phalcon',
            'url' => 'https://www.sitepoint.com/up-and-running-with-the-fastest-php-framework-on-php7-in-5-mins/',
            'title' => 'Up and Running with the Fastest PHP Framework on PHP7 in 5 Mins',
            'publish_date' => '2016-08-23',
            'description' => 'In the latest post on sitepoint, Bruno help us up and running with phalcon in 5 minutes.',
        ],
        [
            'magazine' => 'August 2016',
            'author' => 'Reza Lavaryan',
            'website' => 'SitePoint',
            'category' => 'Library',
            'url' => 'https://www.sitepoint.com/framework-agnostic-php-cronjobs-made-easy-with-crunz/',
            'title' => 'Framework-Agnostic PHP Cronjobs Made Easy with Crunz!',
            'publish_date' => '2016-08-24',
            'description' => 'In the latest post on sitepoint, Reza tells us managing cron jobs using Crunz library.',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addWebsites();
        $this->addAuthors();
        $this->addArticles();
    }

    /**
     * Add Articles
     */
    protected function addArticles()
    {
        foreach ($this->articles as $article) {
            $articleModel = new Article();

            $magazine = Magazine::where('name', $article['magazine'])->first();
            $articleModel->magazine_id = $magazine->id;

            //ToDO: There could be two authors with same name. Handle them.
            $author = Author::where('name', $article['author'])->first();
            $articleModel->author_id = $author->id;

            $website = Website::where('name', $article['website'])->first();
            $articleModel->website_id = $website->id;

            $category = Category::where('name', $article['category'])->first();
            $articleModel->category_id = $category->id;

            $articleModel->url = $article['url'];
            $articleModel->title = $article['title'];
            $articleModel->published_at = $article['publish_date'];
            $articleModel->description = $article['description'];
            $articleModel->created_at = Carbon::now()->format('Y-m-d H:i:s');
            $articleModel->save();

            $magazine->no_of_articles++;
            $magazine->save();
        }
    }

    /**
     * Add addWebsites
     */
    protected function addWebsites()
    {
        foreach ($this->websites as $website) {
            $websiteModel = new Website();
            $websiteModel->name = $website['name'];
            $websiteModel->site_url = $website['siteUrl'];
            $websiteModel->feed_url = $website['feedUrl'];
            $websiteModel->save();
        }
    }

    /**
     * Seed authors
     */
    protected function addAuthors()
    {
        foreach ($this->authors as $author=>$website) {
            $authorModel = new Author();
            $authorModel->name = $author;

            $websiteModel = Website::where('name', $website)->first();
            $authorModel->save();
            $authorModel->websites()->attach($websiteModel);
            $authorModel->save();
        }
    }
}
