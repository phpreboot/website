<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MagazineTableSeeder extends Seeder
{
    /**
     * Run the database seeds for Magazine table.
     *
     * @return void
     */
    public function run()
    {
        DB::table('magazines')->insert(
            [
                'name' => "August 2016",
                'short_name' => 'Aug16',
                'no_of_articles' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );
    }
}
