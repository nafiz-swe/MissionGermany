<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; // Ensure this line exists if using controller
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;


// Homepage
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/services/aupair', 'services.aupair')->name('services.aupair');
Route::view('/services/ausbildung', 'services.ausbildung')->name('services.ausbildung');
Route::view('/services/block-account', 'services.block_account')->name('services.block_account');
Route::view('/services/course', 'services.course')->name('services.course');
Route::view('/services/documents', 'services.documents')->name('services.documents');
Route::view('/services/dormitory', 'services.dormitory')->name('services.dormitory');
Route::view('/services/fsj-bfd', 'services.fsj_bfd')->name('services.fsj_bfd');
Route::view('/services/job', 'services.job')->name('services.job');
Route::view('/services/university', 'services.university')->name('services.university');
Route::view('/services/visa', 'services.visa')->name('services.visa');

Route::get('/booking', [BookingController::class, 'create'])
    ->middleware('auth')
    ->name('booking.form');

// Route::get('/booking', [BookingController::class, 'create'])->name('booking.form');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

// Static pages
Route::view('/success', 'success')->name('success');
Route::view('/review', 'review')->name('review');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Register 
Route::get('/register', [RegisterController::class, 'show'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisterController::class, 'register'])
    ->name('register.post'); 


// Login Routes
// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->middleware('guest') // 👈 same middleware এখানে
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Protected Route - Only for logged in users
Route::get('/dashboard', function () {
    return view('dashboard'); // এটা `resources/views/dashboard.blade.php` দেখাবে
})->name('dashboard')->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/booking/{id}/download', [BookingController::class, 'downloadPdf'])->name('booking.download');
Route::get('/booking/html/{id}', [BookingController::class, 'showHtml'])->name('booking.html');
Route::put('/user/update', [UserController::class, 'update'])->name('user.update');
