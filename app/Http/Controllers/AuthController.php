<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Mail\TestMail;
use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            "email" => $request->input("email"),
            "password" => $request->input("password")
        ];

        $isRemember = $request->input("remember") == "on";

        if (Auth::attempt($credentials, $isRemember)) {
            $request->session()->regenerate();

            return redirect()->route("homepage");
        }

        return back()->withErrors([
            "error" => "Error"
        ]);
    }

    public function getLoginPage()
    {
        return view("auth.login");
    }


    public function getRegisterPage()
    {
        return view("auth.register");
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
           "name" => $request->input("name"),
           "password" => Hash::make($request->input("password")),
           "email" => $request->input("email")
        ]);

        Mail::to($user->email)->send(new TestMail($user));
        event(new Registered($user));

        Auth::login($user);

        return redirect()->route("homepage");
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route("homepage");
    }

    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $user = User::query()->where("provider", "google")->where("social_id", $googleUser->getId())->first();
        if( !$user ) {
            $user = User::query()->create([
                "name" => $googleUser->getName(),
                "provider" => "google",
                "social_id" => $googleUser->getId()
            ]);
        }

        $userInformation = $user->information;
        if(!$userInformation) {
            UserInformation::query()->create([
               "user_id" => $user->id,
               "first_name" => $googleUser->user["given_name"],
               "last_name" => $googleUser->user["family_name"],
            ]);
        }

        Auth::login($user);

        return redirect()->route("homepage");
    }

    public function steamRedirect()
    {
        return Socialite::driver('steam')->redirect();
    }

    public function steamCallback()
    {
        $steamUser = Socialite::driver('steam')->user();

        $user = User::query()->firstOrCreate([
            'provider' => 'steam',
            'social_id' => $steamUser->getId(),
        ], [
            'name' => $steamUser->getNickname(),
        ]);

        Auth::login($user);

        return redirect()->route("homepage");
    }
}
