<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    public function product(){
        return $this->hasOne(Product::class,'id','product_or_bike_id');
    }

    public function bike(){
        return $this->hasOne(Bike::class,'id','product_or_bike_id');
    }
}
