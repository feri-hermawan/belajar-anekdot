<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['siswa_id','kelas_id'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'siswa_id');
    }
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
}
