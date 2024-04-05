<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\BirthdayGreetings;

class SendBirthdayEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        $birthdate = date('Y-m-d');
        $users = User::where('birthdate', $birthdate)->take(100)->get();
        foreach ($users as $user) {
            Mail::to($user->email)->queue(new BirthdayGreetings($user));
        }
        return "Email sedang dalam proses pengiriman.";
    }
}

