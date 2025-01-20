<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kategoriBuku;
use App\Models\pinjam;
use App\Models\ulasan;

class buku extends Model
{
    use HasFactory;

    public function kategori_buku(){
        return $this->belongsTo(kategoriBuku::class);
    }
    public function pinjams(){
        return $this->hasMany(pinjam::class);
    }
    public function ulasans(){
        return $this->hasMany(ulasan::class);
    }
}
