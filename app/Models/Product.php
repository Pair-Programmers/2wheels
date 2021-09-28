<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'images',
        'description',
        'category_id',
        'price',
        'condition',
        'quantity_available',
        
        'seller_name',
        'seller_phone',
        'seller_address',
        'user_id',
    ];

    public function getImages()
    {
        return json_decode($this->images);
    }

    public function category(){
        return $this->hasOne(ProductCategory::class, 'id', 'category_id');
    }

}
