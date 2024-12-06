<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventManagementController;

use App\Http\Controllers\EventBookingController;

// Home page route
Route::get('/', [EventBookingController::class, 'index'])->name('home');

// Other routes
Route::get('/products', [EventManagementController::class, 'products'])->name('products');
Route::get('/contact', [EventManagementController::class, 'contact'])->name('contact');

// Event Booking CRUD routes
Route::resource('bookings', EventBookingController::class);
