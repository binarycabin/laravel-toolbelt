<?php

namespace BinaryCabin\LaravelToolbelt\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelToolbeltFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-toolbelt';
    }
}
