<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Sponsor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function index(){

        return view('admin.index');
    }

    public function show_event_page()
    {
        $events = Event::paginate(5);
        return view('admin.events', compact('events'));
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
        return view('admin.gallery');
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


    private function uploadImage($request): ?string
    {
        $fileUrl = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName(); // Generate a unique name for the file
            $filePath = $file->storeAs('public/uploads', $fileName);
            $fileUrl = asset('storage/uploads/' . $fileName);

            return  $fileUrl;
        }

    }

    public function delete_event($id)
    {
        $event = Event::find($id);

        $event->delete();

         return Redirect::back()->with('success', 'Event deleted successfully!');

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


}
