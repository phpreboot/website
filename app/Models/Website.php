<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    /**
     * Get the articles on website.
     */
    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }

    /**
     * The authors that belong to the website.
     */
    public function authors()
    {
        return $this->belongsToMany('App\Author');
    }
}
