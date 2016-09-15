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
}