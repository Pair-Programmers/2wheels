<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    public function orderDetailProduct(){
        return $this->hasOne(Product::class,'id','product_id');
    }

    public function vendor(){
        return $this->hasOne(User::class, 'id', 'vendor_id');
    }
}
