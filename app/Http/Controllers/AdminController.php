<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Sponsor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function index(){


         $users = User::all()->count();
        $event = Event::all()->count();
        $sponsors = Sponsor::all()->count();
        $galleries = Gallery::all()->count();
        return view('admin.index', compact('users', 'event', 'sponsors', 'galleries'));
    }

    public function login(){

        return view('admin.login');
    }


    public function login_admin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Validate the login form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();

            // Check if the authenticated user has the admin role
            if ($user->role === 'admin') {
                return redirect()->route('admin_home')->with('success', 'Logged in successfully');
            } else {
                // Log the user out if they are not an admin
                Auth::logout();
                return redirect()->back()->with('error', 'Access denied. Admins only.');
            }
        } else {
            // Authentication failed...
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }




    public function show_event_page()
    {
        $events = Event::paginate(5);
        return view('admin.events', compact('events'));
    }


    public function show_sponsor_page($id)
    {
        $sponsor = Sponsor::find($id);
        return view('admin.approve-sponsor', compact('sponsor', 'id'));
    }

    public function all_users()
    {
        $users = User::paginate(5);
        return view('admin.users', compact('users'));
    }

    public function sponsors()
    {
        $sponsors = Sponsor::paginate(10); // Fetch paginated sponsors from the database
        return view('admin.sponsors', compact('sponsors'));
    }

    public function gallery()
    {
        $galleries = Gallery::paginate(5);

        return view('admin.gallery', ['galleries' => $galleries])   ;
    }


    public function approve_sponsor(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:sponsors,id',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Find the sponsor by ID
        $sponsor = Sponsor::find($request->id);

        // Handle file upload if a new logo is provided
        if ($request->hasFile('logo')) {
            $logoName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('images'), $logoName);
            $sponsor->logo = $logoName;
        }

        // Update the sponsor's approval status
        $sponsor->accepted = 1;
        $sponsor->save();

        return Redirect::route('sponsors')->with('success', 'Sponsor approved successfully!');
    }

    public function blog()
    {
        $blogs = Blog::paginate(5);

        return view('admin.blog', ['blogs' => $blogs])   ;

    }



    public function save_event(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'start_time' => 'required',
                'end_time' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'location' => 'required|string|max:255',
                'type' => 'required|string|max:255',
                'age_group' => 'required|string|max:255',
            ]);

            // Handle file upload
            if ($request->hasFile('image')) {
                $validatedData['image'] =   $this->uploadImage($request);
            }

            Event::create($validatedData);

            return Redirect::back()->with('success', 'Event created successfully!');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            $firstError = $errors->all()[0]; // Get the first validation error
            return Redirect::back()->with('error', $firstError);
        }


    }



    public function save_blog(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Handle file upload
            if ($request->hasFile('image')) {
                $validatedData['image'] =   $this->uploadImage($request);
            }

            Blog::create($validatedData);

            return Redirect::back()->with('success', 'Blog created successfully!');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            $firstError = $errors->all()[0]; // Get the first validation error
            return Redirect::back()->with('error', $firstError);
        }


    }


    private function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName(); // Generate a unique name for the file
            $file->storeAs('public/uploads', $fileName);
            $fileUrl = asset('storage/uploads/' . $fileName);

            return $fileUrl;
        }

        return null;
    }


    public function delete_event($id)
    {
        $event = Event::find($id);

        $event->delete();

         return Redirect::back()->with('success', 'Event deleted successfully!');

    }


    public function delete_gallery($id)
    {
        $event = Gallery::find($id);

        $event->delete();

        return Redirect::back()->with('success', 'Gallery deleted successfully!');

    }

    public function delete_blog($id)
    {
        $event = Blog::find($id);

        $event->delete();

        return Redirect::back()->with('success', 'Blog deleted successfully!');

    }



    public function delete_user($id)
    {
        $user = User::find($id);

        $user->delete();

        return Redirect::back()->with('success', 'User deleted successfully!');

    }

    public function delete_sponsor($id)
    {
        $user = Sponsor::find($id);

        $user->delete();

        return Redirect::back()->with('success', 'Record deleted successfully!');

    }



    public function submit_sponsor(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Sponsor::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'company_name' => $validatedData['company'],
            'message' => $validatedData['message'],
            'logo' => null,
            'desc' => null,
        ]);

        return Redirect::back()->with('success', 'Thank you for your interest in becoming a sponsor! You will be contacted shortly');
    }




    public function save_gallery(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] =   $this->uploadImage($request);
        }

        // Store gallery data in the database
        Gallery::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $validatedData['image'],
        ]);

        return redirect()->back()->with('success', 'Gallery uploaded successfully!');

}

    public function register_admin(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email|max:255',
            'name' => 'required|string|max:255',
        ]);

        // Check if the email already exists
        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->with('error', 'Email already exists.');
        }

        // Create the new admin user
        User::create([
            'email' => $request->email,
            'password' => bcrypt('admin123'), // Ensure password is hashed
            'name' => $request->name,
            'role' => 'admin',
        ]);

        return redirect()->back()->with('success', 'User added successfully');
    }



}
