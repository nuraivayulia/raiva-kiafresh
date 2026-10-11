<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;

Route::get('/', function () {
    return view('welcome');
});

// admin
Route::get('/admin', [AdminController::class, 'index']);

// guest
Route::get('/guest', [GuestController::class, 'index']);