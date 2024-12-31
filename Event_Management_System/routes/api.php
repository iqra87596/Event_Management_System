<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\EventBookingApiController;

// Category API Routes
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryApiController::class, 'index']); // Get all categories
    Route::get('/{category}', [CategoryApiController::class, 'show']); // Get a single category
    Route::post('/', [CategoryApiController::class, 'store']); // Create a new category
    Route::put('/{category}', [CategoryApiController::class, 'update']); // Update a category
    Route::delete('/{category}', [CategoryApiController::class, 'destroy']); // Delete a category
});

// Event Booking API Routes
Route::prefix('bookings')->group(function () {
    Route::get('/', [EventBookingApiController::class, 'index']); // Get all bookings
    Route::get('/{booking}', [EventBookingApiController::class, 'show']); // Get a single booking
    Route::post('/', [EventBookingApiController::class, 'store']); // Create a new booking
    Route::put('/{booking}', [EventBookingApiController::class, 'update']); // Update a booking
    Route::delete('/{booking}', [EventBookingApiController::class, 'destroy']); // Delete a booking
});

// User Route Example
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
