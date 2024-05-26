<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\KelasController;

Route::middleware(GuestMiddleware::class)->group(function () {
    Route::get('/login', [AuthController::class, "Login"])->name("login");
    Route::post('/login', [AuthController::class, 'LoginUser']);
    Route::get('/register', [AuthController::class, "Registrasi"])->name("student_register");
    Route::post("/register", [AuthController::class, 'CreateUser']);
    Route::get('/teacher-register', [AuthController::class, 'TeacherRegister'])->name("teacher_register");
});

Route::prefix("teacher")->group(function () {
    Route::get("/profile", [UserController::class, 'ProfileGuru'])->name('teacher_profile')->middleware(['auth','TeacherAuth']);
    Route::get("/kelas", [KelasController::class, 'DaftarKelas'])->name("daftar_kelas")->middleware(['Auth','TeacherAuth']);
    Route::get("/tugas", [TugasController::class, 'DaftarTugas'])->name("daftar_tugas")->middleware(['Auth','TeacherAuth']);
});

Route::prefix("student")->group(function () {
    Route::get('/profile', [UserController::class, 'Profile'])->name('student_profile');
    Route::get('/tugas', [TugasController::class, 'ListTugas'])->name("tugas");
    Route::get('/tugas/{tugasId}', [TugasController::class, 'TugasById'])->name("tugasById");
    Route::get('/tugas/detail/{tugasId}', [TugasController::class, 'DetailTugas'])->name("tugasDetail");
    Route::get('/quiz', [QuizController::class, 'Quiz'])->name("quiz");
    Route::get('/materi-anekdot', [\App\Http\Controllers\Materi::class, 'Materi'])->name("materi");
});

Route::get('logout', [AuthController::class,'logout'])->name('logout');
