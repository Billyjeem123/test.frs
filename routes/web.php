<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index'])->name('ourhomepage');


Route::get('/about', function () {
    return view('home.about');
})->name('about');



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
})->name('contact');

Route::post('/contact', [HomeController::class, 'send_contact'])->name('contact.send');

Route::get('/facility', function () {
    return view('home.facility');
});

Route::get('/test', function () {
    return view('home.event_id');
});
Route::get('/event', [HomeController::class, 'event'])->name('event');



Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerUser'])->name('register_user');
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginuser'])->name('login_user');


Route::get('/dashboard/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'login_admin'])->name('login_admin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin_home');
    Route::get('/events', [AdminController::class, 'show_event_page'])->name('show_event_page');
    Route::get('/all_users', [AdminController::class, 'all_users'])->name('all_users');
    Route::post('/register_admin', [AdminController::class, 'register_admin'])->name('register_admin');

    Route::get('/sponsors', [AdminController::class, 'sponsors'])->name('sponsors');
    Route::get('/gallery', [AdminController::class, 'gallery'])->name('gallery');
    Route::post('/events', [AdminController::class, 'save_event'])->name('save_event');
    Route::get('/delete/event/{id}', [AdminController::class, 'delete_event'])->name('delete_event');
    Route::get('/delete/user/{id}', [AdminController::class, 'delete_user'])->name('delete_user');
    Route::post('/submit-sponsor', [AdminController::class, 'submit_sponsor'])->name('submit_sponsor');
    Route::get('/delete/sponsor/{id}', [AdminController::class, 'delete_sponsor'])->name('delete_sponsor');
    Route::post('/gallery/store', [AdminController::class, 'save_gallery'])->name('gallery.store');
    Route::get('/delete/gallery/{id}', [AdminController::class, 'delete_gallery'])->name('delete_gallery');
    Route::get('/approve-sponsor/{id}', [AdminController::class, 'show_sponsor_page'])->name('show_sponsor_page');
    Route::post('/approve-sponsor', [AdminController::class, 'approve_sponsor'])->name('approve_sponsor');

    Route::get('/blog', [AdminController::class, 'blog'])->name('blog');
    Route::post('/blog', [AdminController::class, 'save_blog'])->name('save_blog');
});






