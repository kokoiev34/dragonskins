<?php

namespace App\Http\Controllers;

use http\Client\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationController
{
    public function view()
    {
        return view("auth.verify-email");
    }

    public function handle(EmailVerificationRequest $request){
        $request->fulfill();
        return redirect('/auth.account');
    }

    public function send(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    }

}
