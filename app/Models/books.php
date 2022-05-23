<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $table = 'books';

    public function prices() {
        return $this->hasOne(prices::class, 'bookID', 'id')->where('end_date',null);
    }
    
    public function categories(){
        return $this->belongsTo(categories::class,'categoryID','id')->where('is_active', 1);
    }

    public function book_languages(){
        return $this->belongsTo(book_languages::class,'languageID','id')->where('is_active', 1);
    }

    public function publishers(){
        return $this->belongsTo(publishers::class,'publisherID','id')->where('is_active', 1);
    }

    public function authors() {
        return $this->hasOneThrough(authors::class, book_authors::class, 'authorID', 'id')->where('authors.is_active', 1);
    }

    public function order_details() {
        return $this->hasMany(order_details::class, 'book_id')->where('is_active', 1);
    }

    public function addprice($bookID,$price,$date) {
        $db2 = new prices();
        $db2->bookID = $bookID;
        $db2->price = $price;
        $db2->start_date= $date;
        $db2->is_active= 1;
        $db2->save();
    }

    public function updateprice($bookID,$price,$date) {
        $db  = prices::where('end_date',null)->where('bookID',$bookID)->first();
        if($db) {
            $db->end_date = $date;
            $db->save();
        }
        // return $db;
        $db2 = new prices();
        $db2->bookID = $bookID;
        $db2->price = $price;
        $db2->start_date= $date;
        $db2->is_active= 1;
        $db2->save();
    }
}
