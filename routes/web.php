<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login.user');

Route::prefix('admin')->name('admin.')->middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('user-profile')->name('profile.')->group(function () {
        Route::get('/update-profile', [UserController::class, 'showUpdateProfilePage'])->name('update-profile');
        Route::get('/update-password', [UserController::class, 'showUpdatePasswordPage'])->name('update-password');
        Route::get('/update-profile-picture', [UserController::class, 'showUpdateProfilePicturePage'])->name('update-profile-picture');
    });
});
