<?php

/*
|--------------------------------------------------------------------------
| Static site pages of PHP Reboot
|--------------------------------------------------------------------------
| Here is where we will define common website pages like home page, about,
| team, faqs etc.
|
| They will be placed in Controllers/PhpReboot.
|--------------------------------------------------------------------------
*/
Route::get('/', [
    'as' => 'home',
    'uses' => 'PhpReboot\HomeController@homePage'
]);
Route::get('/meetup', [
    'as' => 'meetup',
    'uses' => 'PhpReboot\MeetupController@index'
]);

/*
|-------------------------------------------------------------------------
| Dynamic pages of PHP Reboot
|-------------------------------------------------------------------------
| Below are the routes that are generated dynamically. We need to cache
| the data required by these pages.
*/
Route::get('/magazine/{shortName}', 'PhpReboot\Magazine\MagazineController@monthPage');
Route::get('/magazine/article/{articleId}', 'PhpReboot\Magazine\MagazineController@articleDetails');

Route::group(['middleware' => ['auth']], function()
{
	Route::get('/user/favourite/add/{articleId}', 'PhpReboot\Magazine\FavouriteController@addToFavourite');
	Route::get('/user/favourite/remove/{articleId}', 'PhpReboot\Magazine\FavouriteController@removeFromFavourite');
	Route::get('/user/favourite', 'PhpReboot\Magazine\FavouriteController@getFavourite');
});

/*
|--------------------------------------------------------------------------
| Authentication routes for PHP Reboot
|--------------------------------------------------------------------------
| Below are the authentication and registration routes for
| PHP Reboot. They are Laravel 5.1 default authentication
| and registration routes.
|--------------------------------------------------------------------------
*/
// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
