<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = ['siswa_id','kode_kelas'];

    public function tugas(): HasMany
    {
        return $this->hasMany(Tugas::class);
    }
    public function guru(): BelongsTo
    {
        return $this->belongsTo(User::class, 'guru_id');
    }
    public function siswa(): HasOne
    {
        return $this->hasOne(Siswa::class);
    }
}
