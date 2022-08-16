<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;
use App\Models\User;

class HomeController
{
    public function show()
    {
        $techs = [];
        $techs1 = file_get_contents('http://localhost/public/assets/tech.json');
        $techs1 = json_decode($techs1);
        $techs[] = $techs1;
        //dd($techs);
        return view('welcome', compact('techs'));
    }
}
