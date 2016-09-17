<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $url;
    public $title;
    public $published_at;
    public $description;
    public $json_file_name;
    public $category_id;
    public $author_id;
    public $website_id;
    public $magazine_id;

    /**
     * Get the magazine that owns the article.
     */
    public function magazine()
    {
        return $this->belongsTo('App\Models\Magazine');
    }

    /**
     * Get the category that owns the article.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * Get the author of the article.
     */
    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }

    /**
     * Get the website of the article.
     */
    public function website()
    {
        return $this->belongsTo('App\Models\Website');
    }
}
