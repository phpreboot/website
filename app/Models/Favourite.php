<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    /**
     * Get the user having this article as favourite.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the favourite article.
     */
    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }
}
