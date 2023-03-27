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
    /**
     * unsure if an admin function should be in one controller or multiple controllers and then in this group
     * for example the register function could be in a RegisterController or just AdminController?
     */
    Route::get('admin/register', [RegisterController::class, 'create'])->name('admin.register.create');
    Route::post('admin/register', [RegisterController::class, 'store'])->name('admin.register.store');

    Route::get('admin/employees', [AdminController::class, 'index'])->name('admin.employees.index');
});
