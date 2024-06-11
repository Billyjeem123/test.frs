<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.index');
})->name('ourhomepage');;

Route::get('/about', function () {
    return view('home.about');
})->name('about');

Route::get('/event', function () {
    return view('home.event');
})->name('event');

Route::get('/blog', function () {
    return view('home.blog');
})->name('blog');


Route::get('/sponsor', function () {
    return view('home.sponsor');
})->name('sponsor');

Route::get('/classes', function () {
    return view('home.classes');
});




Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/facility', function () {
    return view('home.facility');
});

Route::get('/test', function () {
    return view('home.appointment');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerUser'])->name('register_user');
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginuser'])->name('login_user');



