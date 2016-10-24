<?php

use Illuminate\Database\Seeder;

class October16NewCategoryTableSeeder extends Seeder
{
    /**
     * @var array Array of category name and description.
     */
    private $categories = [
        'News' => 'Articles with different & important news about PHP & related technologies.',
        'Lumen' => 'Articles related to Lumen framework',
        'Basics' => 'Articles covering basics of PHP and related technologies'
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
