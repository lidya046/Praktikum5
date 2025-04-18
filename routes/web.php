<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuItemController;



Route::get('/Login', [LoginController::class, 'index']);
Route::get('/DashboardAdmin', [DashboardController::class, 'index']);
Route::get('/MenuItem', [MenuItemController::class, 'index']);
Route::get('/gambar', function () {
    return view('image');
});