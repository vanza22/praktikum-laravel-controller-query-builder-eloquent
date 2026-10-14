<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'sks',
        'semester',
        'dosen_id',
    ];

    public function nilai()
    {
        return $this->hasMany(NilaiMatakuliah::class);
    }
    
    public function dosen()
    {
        return $this->belongsTo(User::class, 'dosen_id');
    }
}