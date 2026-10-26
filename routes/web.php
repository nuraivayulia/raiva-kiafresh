<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [GuestController::class, 'home'])->name('home');
Route::get('/auth', [GuestController::class, 'login'])->name('auth');
Route::get('/register', [GuestController::class, 'register'])->name('register');


Route::post('/auth', [AuthController::class, 'prosesLogin'])->name('auth.proses');
