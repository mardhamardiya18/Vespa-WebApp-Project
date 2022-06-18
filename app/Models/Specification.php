<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;

    protected $fillable = [
        'products_id',
        'engine',
        'displacement',
        'max-power',
        'max-torque',
        'cooling-system',
        'transmission',
        'brake-system',
        'front-tire',
        'rear-tire',
        'fuel-capacity'
    ];
}