<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileMerchant;
use App\Http\Controllers\ProfileMerchantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('admin/content/dashboard');
})->name('dashboard');

// Profile
Route::get('/profile', [ProfileMerchantController::class, 'index'])->name('profile');
Route::post('/profilePost', [ProfileMerchantController::class, 'profilePost'])->name('profilePost');
Route::post('/profileUpdate/{id}', [ProfileMerchantController::class, 'profileUpdate'])->name('profileUpdate');

// Menu
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::post('/menuPost', [MenuController::class, 'menuPost'])->name('menuPost');
