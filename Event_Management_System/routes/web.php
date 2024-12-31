<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventBookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventManagementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

// Dashboard Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Authentication Routes
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Home Page Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Static Pages Routes
Route::get('/products', [EventManagementController::class, 'products'])->name('products'); // Event products page
Route::get('/contact', [EventManagementController::class, 'contact'])->name('contact');   // Contact page

// Categories Routes
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');         // View all event categories
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create'); // Show create event category form
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');        // Store a new event category
    Route::get('/search', [CategoryController::class, 'search'])->name('categories.search'); // Search within event categories
    Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show'); // View a single event category
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit'); // Show edit event category form
    Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update'); // Update an event category
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy'); // Delete an event category
});

// Event Bookings Routes
Route::resource('bookings', EventBookingController::class); // Manage event bookings
Route::middleware(['auth'])->group(function () {
    Route::get('/categories/search', [CategoryController::class, 'search'])->name('search');
});


