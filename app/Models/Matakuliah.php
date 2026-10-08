<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    public function nilai()
    {
        return $this->hasMany(NilaiMatakuliah::class);
    }
}