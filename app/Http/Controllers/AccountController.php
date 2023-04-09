<?php

namespace App\Http\Controllers;

use App\Helpers\Country;
use App\Models\Category;
use App\Services\AccountService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController
{


    public function account()
    {
        $geos = Country::getAllGeos();
        $categories = Category::all();
        return view("auth.settings", [
            "user" => Auth::user(),
            "categories" => $categories,
            "geos" => $geos
        ]);
    }

    public function updateAccount(Request $request, AccountService $accountService)
    {
    $accountService->updateAccount($request->all());
    return redirect()->route("account.show");
    }
}
