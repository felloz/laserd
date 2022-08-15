<?php

namespace Laserd\Controller;

class Controller
{
    public static function view($file, $var = null)
    {
        $users = $var;
        echo require_once APP_ROOT . "/views/$file.php";
    }
}
