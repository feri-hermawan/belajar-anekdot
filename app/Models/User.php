<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    protected $fillable = ['name','username','jenis_kelamin','nis','kode_kelas','password','role'];
    /* Khusus role guru */
    public function Kelas(): HasMany
    {
        return $this->hasMany(Kelas::class, 'guru_id');
    }

    /* khusus role siswa */
    public function siswa(): HasOne
    {
        return $this->hasOne(Siswa::class);
    }

    public function guru() : HasOne
    {
        return $this->hasOne(Guru::class);
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
