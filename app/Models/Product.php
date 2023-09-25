<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'weapons',
        'category_id',
        'hash_name',
        'rarity',
        'float_rate',
        'price',
        'currency',
        'statrak',
        'image',
        'is_active',
        'image_link',
    ];
}
