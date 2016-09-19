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

    /**
     * Check if article is favourite for a given user.
     *
     * @param integer $userId
     * @param integer $articleId
     * @return boolean true if article is already user's favorite, false otherwise.
     */
    public function isFavourite($userId, $articleId)
    {
        $favourite = $this->favourite
            ->isFavourite($userId, $articleId)
            ->get();
        
        return count($favourite) >= 1;
    }

    /**
     * Add an article as favourite article for the user.
     *
     * @param integer $userId
     * @param integer $articleId
     * @return boolean result
     */
    public function addToFavourite($userId, $articleId)
    {
        // Confirm article is not already favourite.
        if ($this->isFavourite($userId, $articleId)) {
            return false;
        }

        $favourite = new Favourite();
        $favourite->user_id = $userId;
        $favourite->article_id = $articleId;
        $favourite->save();

        return true;
    }

    /**
     * Add an article as favourite article for the user.
     *
     * @param integer $userId
     * @param integer $articleId
     * @return boolean result
     */
    public function removeFromFavourite($userId, $articleId)
    {
        // Confirm article is currently favourite.
        if (!$this->isFavourite($userId, $articleId)) {
            return false;
        }

        $favourite = $this->favourite
            ->isFavourite($userId, $articleId)
            ->first();

        $favourite->delete();

        return true;
    }
}
