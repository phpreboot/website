<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagazinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazines', function (Blueprint $table) {
            $table->increments('id');
            // Full name like September 2016
            $table->string('name', 14)->unique();
            // Short name, 3 char month and 2 char year like 'sep16'
            $table->char('short_name', 5)->unique();
            // Number of articles in current month.
            // We do not expect more then 265 (unsigned Tinyint) articles in an issue but to be on safer side,
            // taken limit of 65535(unsigned smallint) articles.
            $table->smallInteger('no_of_articles')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('magazines');
    }
}
