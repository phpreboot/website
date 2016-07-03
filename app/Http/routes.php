<?php

/*
|--------------------------------------------------------------------------
| Static site pages of PHP Reboot
|--------------------------------------------------------------------------
|
| Here is where we will define common website pages like home page about,
| team, faqs etc.
|
| They will be placed in Controllers/PhpReboot.
|
*/

Route::get('/', 'PhpReboot\HomeController@homePage');
