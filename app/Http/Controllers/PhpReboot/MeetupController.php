<?php

namespace App\Http\Controllers\PhpReboot;

use App\Http\Controllers\Controller;

class MeetupController extends Controller
{
    /**
     * Show the meetup page of PhpReboot.com.
     *
     * @return Response
     */
    public function index()
    {
        return view('PhpReboot.Meetup.index', [
            'menu' => 'meetup',
            'contentTitleSmall' => 'Meet-ups'
        ]);
    }
}