<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_id',
        'model_year',
        'model_id',
        'images',
        'description',
        'engine_type',
        'reg_city_id',
        'additional_info',
        'category',
        'price',
        'mileage',
        'rating',
        'body_type',
        'seller_name',
        'seller_phone',
        'seller_comment',
        'seller_address',
        'user_id',
        'no_of_reviews',
    ];

    public function getImages()
    {
        return json_decode($this->images);
    }
    
    public function company(){
        return $this->hasOne(Company::class, 'id', 'company_id');
    }

    public function model(){
        return $this->hasOne(BikeModel::class, 'id', 'model_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
