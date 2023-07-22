<?php

use Illuminate\Support\Facades\Route;
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

});
