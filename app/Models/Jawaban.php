<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jawaban extends Model
{
    use HasFactory;

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class, "siswa_id");
    }
    public function soal(): BelongsTo
    {
        return $this->belongsTo(Soal::class);
    }
}
