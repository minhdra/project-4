<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    use HasFactory;

    public function order() {
        return $this->belongsTo(orders::class, 'order_id')->where('is_active', 1);
    }

    public function book() {
        return $this->belongsTo(books::class, 'book_id')->where('is_active', 1);
    }

    public function insertDetail($data, $order_id) {
        $db = new order_details();
        $db->order_id = $order_id;
        $db->book_id = $data['book_id'];
        $db->quantity = $data['quantity'];
        $db->single_price = $data['single_price'];
        $db->image = $data['image'];
        $db->save();

        return $db;
    }

    public function updateDetail($data, $id) {
        $db = order_details::where('is_active', 1)->find($id);
        $db->book_id = $data['book_id'];
        $db->quantity = $data['quantity'];
        $db->total = $data['total'];
        $db->single_price = $data['single_price'];
        $db->image = $data['image'];
        $db->save();

        return $db;
    }

    public function destroyDetail($id) {
        $db = order_details::findOrFail($id);
        $db->is_active = 0;
        $db->save();
    }
}
