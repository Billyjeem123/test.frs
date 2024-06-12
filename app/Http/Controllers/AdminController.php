<?php

namespace App\Http\Controllers;

use App\Models\Event;
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

}
