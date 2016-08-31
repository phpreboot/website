<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * Get the articles written by author.
     */
    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }

    /**
     * The websites where author write articles.
     */
    public function websites()
    {
        return $this->belongsToMany('App\Models\Website');
    }
}
