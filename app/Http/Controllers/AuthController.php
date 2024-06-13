<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){


        return view('home.register');
        #wheever view bis to be called in controller we use the view function
    }


    public function login(){


        return view('home.login');
        #wheever view bis to be called in controller we use the view function
    }


    public function loginuser(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password'); #basically here we are receing the email and password been sent to the request

        if (Auth::attempt($credentials)) {  #Genearte  is a default method in the Auth class meant for authenticating user credetials
            $request->session()->regenerate();

            return redirect()->route('ourhomepage');

        }else{

            return redirect()->route('ourhomepage')->with('message', 'Invalid credentials');

        }


    }


    public function registerUser(Request $request){


      $user =   User::create(["email"=> $request->email,"password"=> $request->password, 'name' => $request->name, "role"=> 'user']);

      Auth::login($user);


       return redirect()->route('ourhomepage');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Optionally invalidate the session
        $request->session()->invalidate();

        // Regenerate the session to prevent session fixation
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged out successfully');
    }
}
