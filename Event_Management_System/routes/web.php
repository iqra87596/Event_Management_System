<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventManagementController;

Route::get('/', [EventManagementController::class, 'home'])->name('home');
Route::get('/products', [EventManagementController::class, 'products'])->name('products');
Route::get('/contact', [EventManagementController::class, 'contact'])->name('contact');
