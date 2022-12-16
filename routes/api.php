<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\RegisterController;

// POST /api/auth/register
Route::post('auth/register', RegisterController::class);
