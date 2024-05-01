<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    /* Khusus role guru */
    public function Kelas(): HasMany
    {
        return $this->hasMany(Kelas::class, 'guru_id');
    }

    /* khusus role siswa */
    public function daftarsiswa(): HasOne
    {
        return $this->hasOne(DaftarSiswa::class, "siswa_id");
    }
    public function nilai(): HasMany
    {
        return $this->hasMany(Nilai::class, "siswa_id");
    }
    public function jawaban(): HasMany
    {
        return $this->hasMany(Jawaban::class, "siswa_id");
    }
    use HasFactory;
}
