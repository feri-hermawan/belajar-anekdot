<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tugas extends Model
{
    use HasFactory;

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }

    public function soal(): HasOne
    {
        return $this->hasOne(Soal::class, "tugas_id");
    }

    public function nilai(): HasOne
    {
        return $this->hasOne(Nilai::class);
    }
}
