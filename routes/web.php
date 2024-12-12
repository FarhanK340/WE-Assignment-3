<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ZooController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [ZooController::class, 'home'])->name('home');
Route::get('/about', [ZooController::class, 'about'])->name('about');
Route::get('/animals', [ZooController::class, 'animals'])->name('animals');
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');

// Routes requiring authentication
Route::middleware('auth')->group(function () {
    Route::get('/services', [ZooController::class, 'services'])->name('services');
    Route::post('/services/add', [ZooController::class, 'addService'])->name('services.add');
    Route::delete('/services/delete/{id}', [ZooController::class, 'deleteService'])->name('services.delete');

    
    Route::post('/logout', function () {
        $previousUrl = url()->previous();

        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect($previousUrl ?? route('home'));
    })->name('logout');
});

Route::middleware(['auth'])-> group(function() {
    Route::get('/admin/contact', [ContactController::class, 'showAdminContactPage'])->name('contact-admin');
    Route::delete('/admin/contact/{id}', [ContactController::class, 'deleteContact'])->name('contact.delete');
    Route::post('/admin/contact/{id}/comment', [ContactController::class, 'addComment'])->name('contact.comment');
});

// Auth Routes using Breeze
Route::middleware('guest')->group(function () {
    Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('register');
    Route::post('/signup', [AuthController::class, 'register'])->name('register.post');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});
