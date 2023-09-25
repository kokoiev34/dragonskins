<?php

namespace App\Listeners;

use App\Mail\NewLogin;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMessageUserLogin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Login $event): void
    {
//        Mail::to($event->user->email)->send(new NewLogin($event->user));
    }
}
