<?php

namespace webup\LaravelWebup\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \webup\LaravelWebup\LaravelWebup
 */
class LaravelWebup extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \webup\LaravelWebup\LaravelWebup::class;
    }
}
