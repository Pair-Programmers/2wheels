<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BikeModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'rating',
        'no_of_reviews',
        'company_id',
        'engine_type',
        'displacement',
        'bore_stroke',
        'compression_ratio',
        'clutch',
        'transmission',
        'price',
        'body_type',
        'dimension',
        'starting',
        'top_speed',
        'petrol_capacity',
        'fuel_average',
        'dry_weight',
        'frame',
        'ground_clearance',
        'wheel_size',
        'tyre_at_back',
        'tyre_at_front',
        'horsepower',
        'torque',
    ];

    public function company(){
        return $this->hasOne(Company::class, 'id', 'company_id');
    }

    public function reviews(){
        return $this->hasMany(BikeReview::class, 'id', 'model_id');
    }

    public function bikes(){
        return $this->hasMany(Bike::class, 'model_id');
    }

    public function getImages()
    {
        return json_decode($this->image);
    }
}
