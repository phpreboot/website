<?php

namespace App\Services;

use App\Repositories\Contract\FavouriteRepositoryInterface;

/**k
 * Favourite services.
 * 
 * Contains business logic regarding favourites.
 */
class FavouriteService {
    protected $favouriteRepo;

    /**
     * Constructor
     * 
     * Used to inject dependency of FavouriteRepository model.
     *
     * @param App\Repositories\Contract\FavouriteRepositoryInterface $favouriteRepo
     */
    public function __construct(FavouriteRepositoryInterface $favouriteRepo)
    {
        $this->favouriteRepo = $favouriteRepo;
    }

    /**
     * Get favorite articles of a user.
     * 
     * @param integer $userId
     * @return Illuminate\Database\Eloquent\Collection Collection of App\Models\Favorite
     */
    public function getFavouriteArticles($userId)
    {
        return $this->favouriteRepo->getFavourites($userId);
    }
}
