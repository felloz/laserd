<?php

namespace App\Interfaces;

interface QueriesInterface
{
    public static function create(array $array): object;

    public static function all(): array;
}
