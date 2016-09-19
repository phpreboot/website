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

    /* ---------------------------------
     * Query scopes for Favourite.
     * ---------------------------------
     */

    /**
     * Defining scope for favourite article
     *
     * https://www.laravel.com/docs/5.1/eloquent#query-scopes
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param integer $userId
     * @param interger $articleId
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeIsFavourite($query, $userId, $articleId)
    {
        return $query->where('user_id', $userId)
            ->where('article_id', $articleId);
    }
}
