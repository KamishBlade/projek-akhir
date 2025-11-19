<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman Dashboard di root
Route::get('/', function () {
    return view('dashboard'); // resources/views/dashboard.blade.php
})->name('dashboard');

// Halaman Overview menggunakan controller
Route::get('/overview', [PageController::class, 'overview'])->name('overview');

// Halaman Tickets menggunakan controller
Route::get('/tickets', [PageController::class, 'tickets'])->name('tickets');

// BARU: Halaman Event Stage menggunakan controller
Route::get('/event', [PageController::class, 'event'])->name('event');

// BARU: Halaman Sosial menggunakan controller
Route::get('/social', [PageController::class, 'social'])->name('social');

// BARU: Halaman Sosial menggunakan controller
Route::get('/map', [PageController::class, 'map'])->name('map');
Route::get('/exhibitors', [PageController::class, 'exhibitors'])->name('exhibitors');

// Jika ingin tetap menambahkan route /dashboard juga, bisa:
Route::get('/dashboard', function () {
    return view('dashboard');
});
