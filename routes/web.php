<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZooController;
use App\Http\Controllers\AuthController;

Route::get('/', [ZooController::class, 'home'])->name('home');
Route::get('/about', [ZooController::class, 'about'])->name('about');
Route::get('/services', [ZooController::class, 'services'])->name('services');
Route::get('/contact', [ZooController::class, 'contact'])->name('contact');
Route::get('/animals', [ZooController::class, 'animals'])->name('animals');

Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('register');
Route::post('/signup', [AuthController::class, 'register'])->name('register.post');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::post('/logout', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect()->route('home');
})->name('logout');
