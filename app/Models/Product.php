<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
        'preview',
    ];

    public function preview(): Attribute
    {
        return new Attribute(
            get: fn () => $this->attributes['image_link'] ? $this->attributes['image_link'] : Storage::disk('public')->url($this->attributes['image']),
        );
    }
}
