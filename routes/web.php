<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, "Login"])->name("login");
    Route::get('/registrasi', [AuthController::class, "Registrasi"])->name("registrasi");
});

Route::get('/profile', [UserController::class, 'Profile'])->name('profile');
Route::get('/tugas',[\App\Http\Controllers\TugasController::class,'ListTugas'])->name("tugas");
Route::get('/tugas/{tugasId}',[\App\Http\Controllers\TugasController::class,'TugasById'])->name("tugasById");
Route::get('/tugas/detail/{tugasId}',[\App\Http\Controllers\TugasController::class,'DetailTugas'])->name("tugasDetail");
Route::get('/quiz',[\App\Http\Controllers\QuizController::class,'Quiz'])->name("quiz");
Route::get('/materi-anekdot',[\App\Http\Controllers\Materi::class,'Materi'])->name("materi");
