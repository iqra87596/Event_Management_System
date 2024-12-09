<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventBookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventManagementController;

// Home page route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Product and Contact page routes
Route::get('/products', [EventManagementController::class, 'products'])->name('products');
Route::get('/contact', [EventManagementController::class, 'contact'])->name('contact');

// Category CRUD routes
//Route::resource('categories', CategoryController::class);


Route::resource('categories', CategoryController::class);

//Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
//Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');


// Event Booking CRUD routes
Route::resource('bookings', EventBookingController::class);
