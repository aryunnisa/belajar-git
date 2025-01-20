<?php

namespace App\Models;
use App\Models\buku;
use App\Models\user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function buku(){
        return $this->belongsTo(buku::class);
    }
}
