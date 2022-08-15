<?php

namespace App\Controllers;


use App\Models\User;
use Carbon\Carbon;

class UserController
{

    public function show()
    {
        $patos = User::all();
        $perro = "Dog";

        return view('users', compact('patos', 'perro'));
    }

    public function create()
    {
        $array = [
            "name" => "luis",
            "username" => "lserrano123" . rand(1, 100),
            "email" => "lserrano" . rand(3, 200) . "@gmail.com",
            "password" => "1234",
            "created_at" => Carbon::now()->toDateTimeString(),
            "updated_at" => Carbon::now()->toDateTimeString()
        ];

        $user = User::create($array);

        echo $user->getEmail();
    }
}
