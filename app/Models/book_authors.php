<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_authors extends Model
{
    use HasFactory;

    public function authors(){
        return $this->hasOne(authors::class,'id','authorID')->where('is_active', 1);
    }
}
