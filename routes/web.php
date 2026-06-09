<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/marketing', [PageController::class, 'marketingServices'])->name('services.marketing');
Route::get('/services/medical', [PageController::class, 'medicalServices'])->name('services.medical');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');

Route::get('/book-consultation', [BookingController::class, 'create'])->name('booking.create');
Route::post('/book-consultation', [BookingController::class, 'store'])->name('booking.store');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('portfolio', AdminController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
    Route::get('/bookings', [AdminController::class, 'bookings'])->name('admin.bookings');
    Route::patch('/bookings/{id}', [AdminController::class, 'updateBooking'])->name('admin.bookings.update');
    Route::get('/messages', [AdminController::class, 'messages'])->name('admin.messages');
    Route::patch('/messages/{id}', [AdminController::class, 'updateMessage'])->name('admin.messages.update');
    Route::delete('/messages/{id}', [AdminController::class, 'destroyMessage'])->name('admin.messages.destroy');
});
