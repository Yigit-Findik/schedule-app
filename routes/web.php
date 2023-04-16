<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [ScheduleController::class, 'index'])->name('home');

// Login
Route::get('login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
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

    Route::get('admin/employees', [UserController::class, 'index'])->name('admin.employees.index');
    Route::get('admin/employees/{user}/edit', [UserController::class, 'edit'])->name('admin.employees.edit');
    Route::patch('admin/employees/{user}', [UserController::class, 'update'])->name('admin.employees.update');
    Route::delete('admin/employees/{user}', [UserController::class, 'destroy'])->name('admin.employees.destroy');

    Route::resource('admin/shifts', ShiftController::class)->except('show');
});

//test for if reset all data
//Route::get('admin/register', [RegisterController::class, 'create'])->name('admin.register.create');
//Route::post('admin/register', [RegisterController::class, 'store'])->name('admin.register.store');
