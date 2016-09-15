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
     * route = /magazine/favourite
     */
    public function getFavourite()
    {
        // Redirect, if user is not authenticated.
        if (!Auth::check()){
            return redirect('/auth/login');
        }

        $favoriteArticles = $this->favoriteService->getFavouriteArticles(Auth::user());

        dd($favoriteArticles);
    }
}