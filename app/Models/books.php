<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;

    public function Price() {
        return $this->hasOne(prices::class, 'bookID', 'id');
    }
}
