<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventBookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventManagementController;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('welcome');
});
 
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::resource('categories', CategoryController::class);
Route::get('categories/search', [CategoryController::class, 'search'])->name('categories.search');


// Home Page Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Static Pages Routes
Route::get('/products', [EventManagementController::class, 'products'])->name('products'); // Products page
Route::get('/contact', [EventManagementController::class, 'contact'])->name('contact');   // Contact page

// Categories Routes
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');         // View all categories
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create'); // Show create category form
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');        // Store a new category
    Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show'); // View a single category
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit'); // Show edit category form
    Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update'); // Update a category
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy'); // Delete a category
});

// Event Bookings Routes
Route::resource('bookings', EventBookingController::class); // Manage event bookings
Route::get('/categories/search', [CategoryController::class, 'search'])->name('categories.search');

