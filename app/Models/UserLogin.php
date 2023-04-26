<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory;

    protected $table = "user_login";

    protected $fillable = [
        "ip",
        "user_id",
        "os",
        "browser",
        "is_mobile",
        ];
}
