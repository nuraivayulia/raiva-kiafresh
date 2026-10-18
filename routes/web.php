<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\PromoController;

Route::get('/', function () {
    return view('welcome');
});

// admin
Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('pelanggan', PelangganController::class)->except('show');
    Route::resource('layanan', LayananController::class)->except('show');
    Route::resource('promo', PromoController::class)->except('show');
});

// guest
Route::get('/guest', [GuestController::class, 'index']);