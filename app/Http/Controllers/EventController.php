<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    ///get today's events
    public function getToday()
    {
        return view('event.today');
    }

    //get upcoming events
    public function getUpcoming()
    {
        return view('event.upcoming');
    }


}
