<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; // Ensure this line exists if using controller

// Homepage
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Static pages
Route::view('/course', 'course')->name('course');
Route::view('/visa', 'visa')->name('visa');
Route::view('/success', 'success')->name('success');
Route::view('/review', 'review')->name('review');
Route::view('/blog', 'blog')->name('blog');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

