<?php

namespace App\Models;
use App\Models\buku;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriBuku extends Model
{
    class kategoriBuku extends Model{
        use HasFactory;

        public function bukus(){
            return $this->belongsTo(buku::class);
        }
}
