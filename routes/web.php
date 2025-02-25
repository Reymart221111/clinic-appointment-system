<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/index', [DashboardController::class, 'index']);

Route::prefix('user-profile')->name('profile.')->group(function () {
    Route::get('/update-profile', [UserController::class, 'showUpdateProfilePage'])->name('update-profile');
    Route::get('/update-password', [UserController::class, 'showUpdatePasswordPage'])->name('update-password');
    Route::get('/update-profile-picture', [UserController::class, 'showUpdateProfilePicturePage'])->name('update-profile-picture');
});
