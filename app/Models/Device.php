<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        "Weapons",
        "Hash_name",
        "Rarity",
        "Float_rate",
        "Price",
        "Currency",
        "StatTrak",
    ];

    public $timestamps = false;
}
