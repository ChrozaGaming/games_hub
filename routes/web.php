<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Halaman auth
Route::get('/auth', function () {
    return view('auth.auth');
})->name('auth.page');

// Proses login
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');

// Proses register
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');

Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Login admin
Route::get('/admin/login', function () {
    return view('admin.auth_admin');
})->name('admin.login.page');

Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');

// Admin dashboard
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/add-game', [AdminController::class, 'addGamePage'])->name('admin.addGamePage');
    Route::post('/admin/add-game', [AdminController::class, 'addGame'])->name('admin.addGame');
    Route::get('/admin/update-credits', [AdminController::class, 'updateUserCreditsPage'])->name('admin.updateUserCreditsPage');
    Route::post('/admin/update-credits', [AdminController::class, 'updateUserCredits'])->name('admin.updateUserCredits');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

});
