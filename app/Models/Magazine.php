<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    public $name;
    public $short_name;
    public $no_of_articles;
    public $created_at;

    /**
     * Get the articles for the magazine issue.
     */
    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }
}
