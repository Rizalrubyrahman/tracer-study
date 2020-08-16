<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('user.event.index',compact('events'));
    }
}
