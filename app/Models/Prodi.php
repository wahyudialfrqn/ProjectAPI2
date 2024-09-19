<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Prodi extends Model
{
    use HasFactory,HasUuids;

    protected $guarded = [];
    //gurded file yang diilih yang tidak boleh di isi 
    public function falkutas()
    {
        return $this->belongsTo(Falkutas::class, 'falkutas');
    }

    public function mahasiswa (){
        return $this->hasMany(Mahasiswa::class,);
    }
}
