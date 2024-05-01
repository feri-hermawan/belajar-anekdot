<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Soal extends Model
{
    use HasFactory;

    public function tugas(): BelongsTo
    {
        return $this->belongsTo(Tugas::class);
    }
    public function jawaban(): HasMany
    {
        return $this->hasMany(Jawaban::class);
    }
}
