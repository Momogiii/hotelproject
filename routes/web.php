<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\BookingController;


Route::get('/', function () {
    return redirect()->route('backend.login');
});
Route::get('backend/login', [LoginController::class, 'loginform']);
Route::get('backend/daftar', [LoginController::class, 'daftarform']);
Route::get('backend/kamar', [KamarController::class, 'kamar']);
Route::get('backend/booking', [BookingController::class, 'booking']);
Route::get('backend/beranda', [BerandaController::class, 'berandaBackend'])->name('backend.beranda');
Route::post('backend/login', [LoginController::class, 'simpanBeranda'])->name('backend.login');
Route::post('backend/daftar', [LoginController::class, 'register'])->name('backend.register');
Route::get('backend/admin', [adminController::class, 'BerandaAdmin'])->name('backend.admin');
