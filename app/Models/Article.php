<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Get the magazine that owns the article.
     */
    public function magazine()
    {
        return $this->belongsTo('App\Model\Magazine');
    }

    /**
     * Get the category that owns the article.
     */
    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }

    /**
     * Get the author of the article.
     */
    public function author()
    {
        return $this->belongsTo('App\Model\Author');
    }

    /**
     * Get the website of the article.
     */
    public function website()
    {
        return $this->belongsTo('App\Model\Website');
    }
}
