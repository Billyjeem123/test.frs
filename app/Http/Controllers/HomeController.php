<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Sponsor;
use App\Notifications\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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


        public function send_contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to(env('APP_MAIL'))->send(new ContactMail($details));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }


}
