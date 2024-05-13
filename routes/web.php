<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, "Login"])->name("login");
    Route::get('/registrasi', [AuthController::class, "Registrasi"])->name("registrasi");
});

Route::get('/profile', [UserController::class, 'Profile'])->name('profile');
Route::get('/tugas',[\App\Http\Controllers\TugasController::class,'ListTugas']);
Route::get('/tugas/{tugasId}',[\App\Http\Controllers\TugasController::class,'TugasById']);
Route::get('/quiz',[\App\Http\Controllers\QuizController::class,'Quiz']);
