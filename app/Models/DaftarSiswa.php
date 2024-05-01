<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DaftarSiswa extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(User::class, "siswa_id");
    }
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
}
