<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'logIn']);
Route::post('/logout', [AuthController::class, 'logOut']);
