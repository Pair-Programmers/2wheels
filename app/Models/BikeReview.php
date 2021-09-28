<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BikeReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'model_id',
        'company_id',
        'model_year',
        'comment',
        'style',
        'comfort',
        'fuel_economy',
        'performance',
        'how_you_know',
        'value_for_money'
    ];

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
