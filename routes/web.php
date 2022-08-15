<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();

$routes->add(
    'welcome',
    new Route(
        constant('URL_SUBFOLDER') . '/',
        array('controller' => 'App\Controllers\HomeController', 'method' => 'show'),
        array()
    )
);

$routes->add(
    'users',
    new Route(
        constant('URL_SUBFOLDER') . 'users',
        array(
            'controller' => 'App\Controllers\UserController',
            'method' => 'show'
        ),
        array()
    )
);
