<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NilaiMatakuliah extends Model
{
    protected $fillable = [
        'mahasiswa_id',
        'matakuliah_id',
        'nilai'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }
}