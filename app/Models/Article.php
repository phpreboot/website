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

    /**
     * Get all records, where article is favourite.
     */
    public function favourite()
    {
        return $this->hasMany('App\Models\Favourite');
    }
}
