<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $table = 'books';

    public function Price() {
        return $this->hasOne(prices::class, 'bookID', 'id');
    }
    
    public function categories(){
        return $this->belongsTo(categories::class,'categoryID');
    }

    public function book_languages(){
        return $this->belongsTo(book_languages::class,'languageID');
    }

    public function publishers(){
        return $this->belongsTo(publishers::class,'publisherID');
    }

    public function authors() {
        return $this->hasOneThrough(authors::class, book_authors::class, 'authorID', 'id');
    }
}
