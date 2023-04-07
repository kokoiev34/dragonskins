<?php

namespace App\Services;

use App\Models\UserInformation;
use Illuminate\Support\Facades\Auth;

class AccountService
{
    public function updateAccount(array $data)
    {
        $user = Auth::user();

        $prepareData = [
            "first_name" => $data["first_name"],
            "last_name" => $data["last_name"],
            "birth_date" => $data["birth_date"],
            "birth_month" => $data["birth_month"],
            "birth_year" => $data["birth_year"],
            "street_name" => $data["street_name"],
            "street_number" => $data["street_number"],
            "zip" => $data["zip"],
            "city" => $data["city"],
            "country" => $data["country"],
//            "is_send_notification" => $data["is_send_notification"],
            "steam_account" => $data["steam_account"],
            "social_account" => $data["social_account"]
        ];

        if (!$user->information) {
            $userInformation = new UserInformation($prepareData);
            $user->information()->save($userInformation);
        } else {
            $user->information()->update($prepareData);
        }
        return $user;
    }
}
