<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;
use App\Models\User;

class HomeController
{
    public function show()
    {
        return view('welcome');
    }
}
