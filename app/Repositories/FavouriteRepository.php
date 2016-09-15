<?php

namespace App\Repositories;

use App\Models\Favourite;
use App\Repositories\Contract\FavouriteRepositoryInterface;

/**
 * Repository to interact with Favourites model.
 */
class FavouriteRepository implements FavouriteRepositoryInterface
{
    /* Columns of favourites table.
     * 
     * Doubt: Should we keep these constants in model or repository?
     * 
     * Why here: Repository seems better place as in case we change MySQL to NoSQL (say), columns might change.
     * At that time, we should change only this file.
     * 
     * Counter view: NoSQL will not have relations.
     */
    const COLUMN_USER_ID = 'user_id';
    const COLUMN_ARTICLE_ID = 'article_id';

    /**
     * @var App\Models\Favourite
     */
    protected  $favourite;

    /**
     * Constructor.
     *
     * Used to inject dependency of Favourite model.
     *
     * @param App\Models\Favourite $favourite
     */
    public function __construct(Favourite $favourite)
    {
        $this->favourite = $favourite;
    }

    /**
     * Get all favourite articles of a user.
     * 
     * @param integer $userId
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getFavourites($userId)
    {
        return $this->favourite->where(self::COLUMN_USER_ID, $userId)->get();
    }
}
