<?php

namespace App\Http\Controllers;

//use GuzzleHttp\Psr7\Request;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


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

    public function register(Request $request)
    {
        $name = $request->input("name");
        $password = $request->input("password");
        $email = $request->input("email");

        $user = User::create([
           "name" => $name,
           "password" => Hash::make($password),
            "email" => $email
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

}
