<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    /**
     * Get the articles for the magazine issue.
     */
    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }
}
