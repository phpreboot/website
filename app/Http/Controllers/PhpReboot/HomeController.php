<?php

namespace App\Http\Controllers\PhpReboot;

//use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the home page of PhpReboot.com.
     *
     * @return Response
     */
    public function homePage()
    {
        return view('PhpReboot.Home.homePage', ['menu' => 'home']);
    }
}