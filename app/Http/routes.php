<?php

/*
|--------------------------------------------------------------------------
| Static site pages of PHP Reboot
|--------------------------------------------------------------------------
|
| Here is where we will define common website pages like home page, about,
| team, faqs etc.
|
| They will be placed in Controllers/PhpReboot.
|
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
|--------------------------------------------------------------------------
| Authentication routes for PHP Reboot
|--------------------------------------------------------------------------
|
| Below are the authentication and registration routes for
| PHP Reboot. They are Laravel 5.1 default authentication
| and registration routes.
|
*/
// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');