<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\UserLoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('register', [AdminLoginController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AdminLoginController::class, 'register'])->name('register.post');
    Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminLoginController::class, 'login'])->name('login.post');
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });
});

// User Routes
Route::get('register', [UserLoginController::class, 'showRegisterForm'])->name('register');
Route::post('register', [UserLoginController::class, 'register'])->name('register.post');
Route::get('login', [UserLoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserLoginController::class, 'login'])->name('login.post');
Route::post('logout', [UserLoginController::class, 'logout'])->name('logout');

Route::middleware('auth:web')->group(function () {
    Route::get('dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');
});
