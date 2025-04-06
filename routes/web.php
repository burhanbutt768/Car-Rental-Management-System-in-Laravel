<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminBookingController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});

Route::delete('admin/bookings/{booking}', [AdminBookingController::class, 'destroy'])->name('admin.bookings.destroy');

// Apply 'admin' middleware to the routes below
Route::middleware('admin')->group(function () {
    Route::get('/admin/bookings', [AdminBookingController::class, 'index'])->name('admin.bookings');
    Route::resource('cars', CarController::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [RentalController::class, 'index'])->name('home');
Route::get('/cars/{car}/rent', [RentalController::class, 'create'])->name('rent.create');
Route::post('/cars/{car}/rent', [RentalController::class, 'store'])->name('rent.store');
Route::get('rent/{rental}/bill', [RentalController::class, 'showBill'])->name('customer.bill');
Route::get('/about', function () {
    return view('customer.about');
})->name('about');
Route::get('/contact', function () {
    return view('customer.contact');
})->name('contact');



