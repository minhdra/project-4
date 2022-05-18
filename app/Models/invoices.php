<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoices extends Model
{
    use HasFactory;

    public function invoice_details(){
        return $this->hasMany(invoice_details::class,'invoiceID','id')->where('is_active',1);
    }

    public function publishers(){
        return $this->belongsTo(publishers::class,'publisher_id','id')->where('is_active',1);
    }
}
