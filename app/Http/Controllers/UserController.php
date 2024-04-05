<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\BirthdayGreetings;

class UserController extends Controller
{

    public function index()
    {
        $birthdate = date('Y-m-d');
        $users = User::where('birthdate', $birthdate)->take(100)->get();
        foreach ($users as $user) {
            Mail::to($user->email)->queue(new BirthdayGreetings($user));
        }
        return "Email sedang dalam proses pengiriman.";
    }

}
