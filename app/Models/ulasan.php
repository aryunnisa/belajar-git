<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasan extends Model
{
    use HasFactory;
    public function buku(){
        return $this->belongsTo(buku::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }
}
