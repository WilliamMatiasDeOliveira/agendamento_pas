<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login-submit', [AuthController::class, 'loginSubmit'])->name('login.submit');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register.submit', [AuthController::class, 'registerSubmit'])->name('register.submit');

Route::get('/home', [AppController::class, 'home'])->name('home');
