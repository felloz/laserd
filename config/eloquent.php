<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;



$db = new Capsule;

$db->addConnection([
    'driver' => 'pgsql',
    'host' => 'localhost',
    'database' => 'test1',
    'username' => 'postgres',
    'password' => '1234',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);


$db->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$db->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$db->bootEloquent();
