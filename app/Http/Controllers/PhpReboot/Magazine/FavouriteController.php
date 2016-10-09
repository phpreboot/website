<?php

namespace App\Http\Controllers\PhpReboot\Magazine;

use App\Http\Controllers\Controller;
use App\Services\FavouriteService;
use Auth;

/**
 * Class FavouriteController contains pages related to favourite functionality.
 * @package App\Http\Controllers\PhpReboot\Magazine
 */
class FavouriteController extends Controller
{
    /**
     * @var App\Services\FavouriteService
     */
    protected $favoriteService;

    public function __construct(FavouriteService $favoriteService)
    {
        $this->favoriteService = $favoriteService;
    }

    /**
     * Display the page with all favourite of logged-in user.
     * route = /user/favourite
     */
    public function getFavourite()
    {
        $favoriteArticles = $this->favoriteService->getFavouriteArticles(Auth::user()->id);

        $viewData = [
            'favoriteArticles' => $favoriteArticles,
            'favoriteArticlesCount' => count($favoriteArticles),
            'menu' => 'favourite',
            'contentTitleSmall' => 'my Favorites',
        ];

        return view('PhpReboot.Favourite.getFavourite', $viewData);
    }

    public function addToFavourite($articleId)
    {
        if ($this->favoriteService->addToFavourite(Auth::user()->id, $articleId)) {
            return response()->json(["result" => true]);
        } else {
            return response()->json(["result" => false]);
        }
    }

    public function removeFromFavourite($articleId)
    {
        if ($this->favoriteService->removeFromFavourite(Auth::user()->id, $articleId)) {
            return response()->json(["result" => true]);
        } else {
            return response()->json(["result" => false]);
        }
    }
}