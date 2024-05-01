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

    public function tugas(): HasMany
    {
        return $this->hasMany(Tugas::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'guru_id');
    }
    public function daftarsiswa(): HasOne
    {
        return $this->hasOne(DaftarSiswa::class);
    }
}
