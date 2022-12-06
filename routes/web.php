<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::view('auth/registration', 'auth.registration')->name('auth.registration');
Route::post('auth/register', RegisterController::class)->name('auth.register');

Route::view('user', 'user.home')->name('user')->middleware('auth');
