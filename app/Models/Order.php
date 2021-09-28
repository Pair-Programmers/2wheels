<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }
    
    public function vendor(){
        return $this->hasOne(User::class, 'id', 'vendor_id');
    }

    public function customer(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
