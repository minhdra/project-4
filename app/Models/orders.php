<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $table = 'orders';

    public function customer() {
        return $this->belongsTo(customers::class, 'customer_id')->where('is_active', 1);
    }

    public function details() {
        return $this->hasMany(order_details::class, 'order_id')->where('is_active', 1);
    }

    public function status() {
        return $this->belongsTo(order_status::class, 'order_status_id', 'id')->where('is_active', 1);
    }

    public function discount() {
        return $this->belongsTo(promotions::class, 'discount_id')->where('is_active', 1);
    }
    
    public function updateTotal($id, $total) {
        $db = orders::where('is_active', 1)->find($id);
        $db->total = $total;
        $db->save();
    }
}
