<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Front-End Routes
Route::get('/', [App\Http\Controllers\PropertyController::class, 'home'])->name('index');
Route::view('about', 'frontend.about')->name('about');
Route::get('properties', [App\Http\Controllers\PropertyController::class, 'index'])->name('properties');
Route::view('contact', 'frontend.contact')->name('contact');
Route::post('contact_message', [App\Http\Controllers\ContactsController::class, 'contact'])->name('contact_message');
Route::get('property/{id}', [App\Http\Controllers\PropertyController::class, 'property'])->name('property');

// Back-End Routes
Route::get('create_property', [App\Http\Controllers\PropertyController::class, 'create'])->name('create_property');
Route::post('store_property', [App\Http\Controllers\PropertyController::class, 'store'])->name('store_property');

