<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [ScheduleController::class, 'index'])->name('home');

// Login
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

// Logout
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// Admin routes
Route::middleware('can:admin')->group(function () {
    /** TODO: Add admin routes here
     * Registration
     * Route::get('register', [RegisterController::class, 'create']);
     * Route::post('register', [RegisterController::class, 'store']);
     */
});
// FOR TESTING
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
