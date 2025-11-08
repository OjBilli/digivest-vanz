<?php

namespace App\Listeners;

use IlluminateAuthEventsLogin;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyAdminOnUserLogin
{
     /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Login  $event
     * @return void
     */
    public function handle(Login $event): void
    {
        $user = $event->user;

        Mail::raw("User {$user->first_name} {$user->last_name} ({$user->email}) just logged in at " . now(), function ($message) {
            $message->to('info@exoduscu.com') // Replace with your admin email
                    ->subject('User Login Notification');
        });
    }
}
