<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController
{
    public function view()
    {
        return view("auth.verify-email");
    }

    public function handle(EmailVerificationRequest $request){
        $request->fulfill();
        return redirect('/');
    }

    public function send(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    }

}
