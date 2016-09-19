<?php
namespace App\Repositories\Contract;

/**
 * A contract for favourites repository
 */
interface FavouriteRepositoryInterface
{
    /**
     * Get all favourite articles of a user.
     * 
     * @param integer $userId
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getFavourites($userId);

    /**
     * Check if article is favourite for a given user.
     *
     * @param integer $userId
     * @param integer $articleId
     * @return boolean true if article is already user's favorite, false otherwise.
     */
    public function isFavourite($userId, $articleId);

    /**
     * Add an article as favourite article for the user.
     *
     * @param integer $userId
     * @param integer $articleId
     * @return boolean result
     */
    public function addToFavourite($userId, $articleId);

    /**
     * Remove an article as favourite article for the user.
     *
     * @param integer $userId
     * @param integer $articleId
     * @return boolean result
     */
    public function removeFromFavourite($userId, $articleId);
}
