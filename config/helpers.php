<?php

function view($a, array $c = null)
{
    if (!empty($c)) {
        $c1 = 0;
        $array_key = array_keys($c);
        foreach ($c as $key => $value) {
            //Nombres de variables variables
            ${$array_key[$c1]} = $c[$array_key[$c1]];
            $c1++;
        }
    }

    require_once APP_ROOT . "/resources/views/$a.php";
}
