<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'seri',
        'lauch',
        'color'
    ];

    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'products_id', 'id');
    }

    public function specification()
    {
        return $this->hasOne(Specification::class, 'id', 'products_id');
    }
}