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
Route::get('/profile',[UserController::class,'profile'])->name('profile')->middleware('auth');
Route::get('/update-profile',[UserController::class,'updateProfile'])->middleware('auth')->name('update_profile');
Route::get('/daftar-tugas',[TugasController::class, 'DaftarTugasSiswa'])->name('daftar_tugas_siswa');
Route::get('/tugas/{id}', [TugasController::class,'ViewTugasById']);
Route::get('/materi',[\App\Http\Controllers\Materi::class,'index']);
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth');
Route::get('/guru/kelas',[KelasController::class,'DaftarKelas']);

Route::post('/register',[UserController::class,'CreateUser']);
Route::post('/login',[AuthController::class,'login']);
Route::post('/update-profile',[UserController::class,'updateUser'])->middleware('auth');

