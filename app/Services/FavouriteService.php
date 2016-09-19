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

    /**
     * Check if article is favourite for a given user.
     *
     * @param integer $userId
     * @param integer $articleId
     * @return boolean true if article is already user's favorite, false otherwise.
     */
    public function isFavourite($userId, $articleId)
    {
        return $this->favouriteRepo->isFavourite($userId, $articleId);
    }

    /**
     * Add article to favourites
     * 
     * @param integer $userId
     * @param integer $articleId
     * @return boolean result
     */
    public function addToFavourite($userId, $articleId)
    {
        return $this->favouriteRepo->addToFavourite($userId, $articleId);
    }

    /**
     * Remove article from favourites
     * 
     * @param integer $userId
     * @param integer $articleId
     * @return boolean result
     */
    public function removeFromFavourite($userId, $articleId)
    {
        return $this->favouriteRepo->removeFromFavourite($userId, $articleId);
    }
}
