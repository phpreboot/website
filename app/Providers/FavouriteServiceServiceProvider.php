<?php

namespace App\Providers;

use App\Services\FavouriteService;
use Illuminate\Support\ServiceProvider;

class FavouriteServiceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('FavouriteService', function($app) {
            return new FavouriteService(
                $app->make('App\Repositories\Contracts\FavouriteRepositoryInterface')
            );
        });
    }
}
