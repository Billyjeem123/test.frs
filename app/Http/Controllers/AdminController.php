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

    public function all_users()
    {
        return view('admin.users');
    }

    public function sponsors()
    {
        return view('admin.sponsors');
    }




}
