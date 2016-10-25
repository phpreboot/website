<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call(MagazineTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(October16NewCategoryTableSeeder::class);
        //$this->call(August16ArticleSeeder::class);

        Model::reguard();
    }
}
