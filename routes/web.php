<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MessageUserController;

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
Route::get('about', [App\Http\Controllers\PropertyController::class, 'about'])->name('about');
Route::get('properties', [App\Http\Controllers\PropertyController::class, 'index'])->name('properties');
Route::get('property/{id}', [App\Http\Controllers\PropertyController::class, 'property'])->name('property');
Route::get('contact', [App\Http\Controllers\PropertyController::class, 'contact'])->name('contact');
Route::post('contact_us', [App\Http\Controllers\ContactController::class, 'store'])->name('contact_us');
Route::get('search_properties', [App\Http\Controllers\PropertyController::class, 'search'])->name('search_properties');

// Back-End Routes
Route::get('create_property', [App\Http\Controllers\PropertyController::class, 'create'])->name('create_property');
Route::post('store_property', [App\Http\Controllers\PropertyController::class, 'store'])->name('store_property');
Route::get('user_profile', [App\Http\Controllers\UserProfileController::class, 'edit'])->name('user_profile');
Route::post('update_profile', [App\Http\Controllers\UserProfileController::class, 'update'])->name('update_profile');
Route::get('edit_property/{id}', [App\Http\Controllers\PropertyController::class, 'edit'])->name('edit_property');
Route::post('update_property/{id}', [App\Http\Controllers\PropertyController::class, 'update'])->name('update_property');
Route::post('property/{id}', [App\Http\Controllers\PropertyController::class, 'destroy'])->name('delete');
Route::post('message_user',             [MessageUserController::class, 'sendMessage'])->name('message_user'); 
Route::get('user_messages',             [MessageUserController::class, 'index'])->name('user_messages');
Route::post('delete_message_user/{id}', [MessageUserController::class, 'deleteMessage'])->name('delete_message_user'); 

