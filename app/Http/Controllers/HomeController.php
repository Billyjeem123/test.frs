<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $galleries = Gallery::paginate(4);
        $sponsors = Sponsor::paginate(4);

        return view('home.index', compact('galleries', 'sponsors'));
    }

    public function event(){

        $events = Event::paginate(10);

        return view('home.event', compact('events'));
    }


}
