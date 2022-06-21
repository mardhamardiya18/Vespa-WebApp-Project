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
        'maxPower',
        'maxTorque',
        'coolingSystem',
        'transmission',
        'brakeSystem',
        'frontTire',
        'rearTire',
        'fuelCapacity'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
