<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;

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

Route::controller(GuestController::class)->name('guest.')->group(function(){

    Route::get('/', 'welcome')->name('welcome');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/contact', 'contactShow')->name('contact.show');
    Route::get('/services', 'services')->name('services');
    Route::get('/tracking', 'showTracking')->name('tracking');
    Route::get('/booking', 'showBookingPage')->name('booking.show');
    Route::get('/i_checker', 'check_role')->name('check.role');

});


Route::controller(AuthController::class)->name('auth.')->group(function(){

    Route::get('/login', 'showLogin')->name('login.show');
    Route::post('/login', 'login')->name('login.try');

    Route::get('/register', 'showRegister')->name('register.show');
    Route::post('/register', 'register')->name('register.try');
    
});
