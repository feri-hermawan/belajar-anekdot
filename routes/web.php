<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [UserController::class, 'CreateAccount']);
Route::get('/test', [UserController::class, 'Test']);
