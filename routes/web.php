<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Login page
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.loginSubmit');

// Dashboard (protected)
Route::get('/dashboard', function () {
    return view('admin.dashboard'); // create this view
})->middleware('auth')->name('dashboard');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
