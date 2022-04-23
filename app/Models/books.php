<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $table = 'books';

    public function categories(){
        return $this->belongsTo(categories::class,'categoryID');
    }

    public function book_languages(){
        return $this->belongsTo(book_languages::class,'languageID');
    }

    public function publishers(){
        return $this->belongsTo(publishers::class,'publisherID');
    }
}
