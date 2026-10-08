<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nim',
        'nama',
        'email',
        'prodi',
        'semester'
    ];

    public function nilai()
    {
        return $this->hasMany(NilaiMatakuliah::class);
    }
}