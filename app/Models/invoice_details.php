<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice_details extends Model
{
    use HasFactory;

    public function books(){
        return $this->hasOne(books::class,'id','bookID')->where('is_active',1);
    }
}
