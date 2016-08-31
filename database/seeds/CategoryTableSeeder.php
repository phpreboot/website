<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * @var array Array of category name and description.
     */
    private $categories = [
        'Architecture' => 'Articles discussing about system architecture in general and not associated with any framework/CMS.',
        'Cake PHP' => 'Articles related to Cake PHP framework',
        'Comparison' => 'Articles comparing two or more things',
        'Database' => 'Articles related to database, both RDBMS & NoSQL',
        'Design Pattern' => 'Articles related to design pattern',
        'Dev-ops' => 'Articles related to dev-ops.',
        'Drupal' => 'Articles related to Drupal CMS',
        'Joomla' => 'Articles related to Joomla CMS',
        'Laravel' => 'Articles related to Laravel framework',
        'Library' => 'Article about some common third-party library',
        'Magento' => 'Articles related to Magento',
        'Phalcon' => 'Articles related to Phalcon framework',
        'PHP-General' => 'Article important about PHP but are not related to any framework or other defined category',
        'Security' => 'Articles related to web application security',
        'Silex' => 'Articles related to Silex framework',
        'Slim Framework' => 'Articles related to Slim Framework',
        'Statistics' => 'Articles showing some statistics',
        'Symfony' => 'Articles related to Symfony framework',
        'Tools' => 'Articles discussing some web development tools',
        'Wordpress' => 'Articles related to Wordpress',
        'Yii' => 'Articles related to Yii framework',
        'Zend Expressive' => 'Articles related to Zend Expressive framework',
        'Zend Framework' => 'Articles related to Zend Framework',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->categories as $name=>$description) {
            DB::table('categories')->insert(
                [
                    'name' => $name,
                    'description' => $description,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
            );
        }
    }
}
