<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('magazine_id')->unsigned();
            $table->integer('author_id')->unsigned();
            $table->integer('website_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('url', 500);
            $table->string('title', 250);
            $table->date('published_at');
            $table->text('description');
            $table->string('json_file_name', 12);
            $table->timestamps();
            
            // Relationship
            $table->foreign('magazine_id')->references('id')->on('magazines');
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('website_id')->references('id')->on('websites');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
