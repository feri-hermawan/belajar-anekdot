<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\KelasController;
use Inertia\Inertia;

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::get('/register',[UserController::class,'register'])->name('register');
Route::get('/profile',[UserController::class,'profile'])->name('profile');
Route::get('/update-profile',[UserController::class,'updateProfile'])->name('update_profile');
Route::get('/daftar-tugas',[TugasController::class, 'DaftarTugasSiswa'])->name('daftar_tugas_siswa');
Route::get('/tugas/{id}', [TugasController::class,'ViewTugasById']);
Route::get('/materi',[\App\Http\Controllers\Materi::class,'index']);

