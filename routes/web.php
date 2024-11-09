<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventBookingController;

Route::get('/', [EventBookingController::class, 'index'])->name('home');
Route::get('/event-listings', [EventBookingController::class, 'eventListings'])->name('event-listings');
Route::get('/about', [EventBookingController::class, 'about'])->name('about');

require __DIR__.'/auth.php';
