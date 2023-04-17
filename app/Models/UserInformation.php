<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "first_name",
        "last_name",
        "birth_date",
        "birth_month",
        "birth_year",
        "street_name",
        "street_number",
        "zip",
        "city",
        "country",
        "is_send_notification",
        "steam_account",
        "social_account"
    ];
}
