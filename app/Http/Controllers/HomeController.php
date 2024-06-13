<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $galleries = Gallery::paginate(4);

        return view('home.index', compact('galleries'));
    }
}
