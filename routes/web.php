<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenaksirController;
use App\Http\Controllers\NasabahController;

Route::get('/', function () {
    return view('landingpage.pages.index');
})->name('landing');


// login
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.proses');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// admin (protected)
Route::prefix('admin')->middleware('admin')->group(function () {
Route::resource('/nasabah', NasabahController::class);

Route::get('/dashboard', [AdminController::class, 'dashboard'])
->name('admin.dashboard');

Route::get('/tables', [AdminController::class, 'tables'])
->name('admin.tables');

Route::get('/profile', [AdminController::class, 'profile'])
->name('admin.profile');

Route::resource('/penaksir', PenaksirController::class);

});

