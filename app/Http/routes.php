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
