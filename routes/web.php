<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('dashboard'); // resources/views/dashboard.blade.php
})->name('dashboard');

Route::get('/overview', [PageController::class, 'overview'])->name('overview');

Route::get('/tickets', [PageController::class, 'tickets'])->name('tickets');

Route::get('/event', [PageController::class, 'event'])->name('event');

Route::get('/social', [PageController::class, 'social'])->name('social');

Route::get('/map', [PageController::class, 'map'])->name('map');

Route::get('/exhibitors', [PageController::class, 'exhibitors'])->name('exhibitors');

Route::get('/merchandise', [PageController::class, 'merchandise'])->name('merchandise');

Route::get('/news', [PageController::class, 'news'])->name('news');

Route::get('/business', [PageController::class, 'business'])->name('business');

Route::get('/dashboard', function () {
    return view('dashboard');
});
