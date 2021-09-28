<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function models(){
        return $this->hasMany(BikeModel::class, 'company_id');
    }

    public function bikes(){
        return $this->hasMany(Bike::class, 'company_id');
    }
}
