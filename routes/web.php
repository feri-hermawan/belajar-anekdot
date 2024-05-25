<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(\App\Http\Middleware\GuestMiddleware::class)->group(function () {
    Route::get('/login', [AuthController::class, "Login"])->name("login");
    Route::get('/register', [AuthController::class, "Registrasi"])->name("student_register");
    Route::post("/register",[AuthController::class,'CreateUser']);
    Route::get('/teacher-register',[AuthController::class,'TeacherRegister'])->name("teacher_register");
});

Route::prefix("teacher")->group(function (){
    Route::get("/profile",[UserController::class,'ProfileGuru'])->name("profile_guru");
    Route::get("/kelas",[\App\Http\Controllers\KelasController::class,'DaftarKelas'])->name("daftar_kelas");
    Route::get("/tugas",[\App\Http\Controllers\TugasController::class,'DaftarTugas'])->name("daftar_tugas");
});

Route::prefix("student")->group(function (){
    Route::get('/profile', [UserController::class, 'Profile'])->name('profile');
    Route::get('/tugas',[\App\Http\Controllers\TugasController::class,'ListTugas'])->name("tugas");
    Route::get('/tugas/{tugasId}',[\App\Http\Controllers\TugasController::class,'TugasById'])->name("tugasById");
    Route::get('/tugas/detail/{tugasId}',[\App\Http\Controllers\TugasController::class,'DetailTugas'])->name("tugasDetail");
    Route::get('/quiz',[\App\Http\Controllers\QuizController::class,'Quiz'])->name("quiz");
    Route::get('/materi-anekdot',[\App\Http\Controllers\Materi::class,'Materi'])->name("materi");
});

