<?php

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;
use App\Models\User;

class HomeController
{
    public function show()
    {
        $techs  = [];
        try {
       
        $techs1 = file_get_contents('assets/tech.json');
        $techs1 = json_decode($techs1);
        $techs[] = $techs1;
        return view('welcome', compact('techs'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        
    }
}
