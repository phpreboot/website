<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the articles available in current category.
     */
    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }
}
