<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Mahasiswa extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    // Relasi belongsTo karena Mahasiswa berada di Prodi
    public function prodi()
    {
        return $this->belongsTo(Prodi::class,'prodis');
    }
}
