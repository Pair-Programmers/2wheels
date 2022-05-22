<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniqueVisitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip_addres',
        'again_visit_count',
    ];
}
