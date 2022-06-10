<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SendContactMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth routes
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Front-End Page Views
Route::view('/', 'frontend.index')->name('index');
Route::view('about', 'frontend.about')->name('about');
Route::view('contact', 'frontend.contact')->name('contact');

// Send email thru the contact form 
Route::post('contact_message', [App\Http\Controllers\ContactsController::class, 'contact'])->name('contact_message');

