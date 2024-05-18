<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->enum('jenis_kelamin',['laki_laki','perempuan'])->nullable();
            $table->string('nis');
            $table->string('kode_kelas');
            $table->string('password');
            $table->string('imgUri')->nullable();
            $table->string("bio")->nullable();
            $table->enum('role', ['guru', 'siswa'])->default('siswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
