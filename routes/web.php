<?php

use App\Http\Controllers\AdminController;
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
    return view('home.event_id');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerUser'])->name('register_user');
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginuser'])->name('login_user');


Route::prefix('dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin_home');
    Route::get('/events', [AdminController::class, 'show_event_page'])->name('show_event_page');
    Route::get('/all_users', [AdminController::class, 'all_users'])->name('all_users');
    Route::get('/sponsors', [AdminController::class, 'sponsors'])->name('sponsors');
    Route::get('/gallery', [AdminController::class, 'gallery'])->name('gallery');
    Route::post('/events', [AdminController::class, 'save_event'])->name('save_event');
    Route::get('/delete/event/{id}', [AdminController::class, 'delete_event'])->name('delete_event');
    Route::get('/delete/user/{id}', [AdminController::class, 'delete_user'])->name('delete_user');
    Route::post('/submit-sponsor', [AdminController::class, 'submit_sponsor'])->name('submit_sponsor');
    Route::get('/delete/sponsor/{id}', [AdminController::class, 'delete_sponsor'])->name('delete_sponsor');
    Route::post('/gallery/store', [AdminController::class, 'save_gallery'])->name('gallery.store');
});






