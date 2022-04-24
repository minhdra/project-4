<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $table = 'books';

    public function Price() {
        return $this->hasOne(prices::class, 'bookID', 'id')->where('end_date',null);
    }
    
    public function categories(){
        return $this->belongsTo(categories::class,'categoryID','id');
    }

    public function book_languages(){
        return $this->belongsTo(book_languages::class,'languageID','id');
    }

    public function publishers(){
        return $this->belongsTo(publishers::class,'publisherID','id');
    }

    public function authors() {
        return $this->hasOneThrough(authors::class, book_authors::class, 'authorID', 'id');
    }
}
