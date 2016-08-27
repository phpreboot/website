<?php

namespace App\Providers;

use App\Services\MagazineService;
use Illuminate\Support\ServiceProvider;

class MagazineServiceServiceProvider extends ServiceProvider
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
        $this->app->bind('MagazineService', function($app) {
            return new MagazineService(
                $app->make('App\Repositories\Contracts\MagazineRepositoryInterface')
            );
        });
    }
}
