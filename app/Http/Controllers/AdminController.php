<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        return view('admin.index');
    }

    public function show_event_page()
    {
        return view('admin.events');
    }
}
