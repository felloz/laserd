<?php

namespace App\Controllers;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class UserController
{

    public function show()
    {
        $users = User::paginate(15);

        return json($users);
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
