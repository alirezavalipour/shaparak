<?php

namespace Shaparak\Facades;

use Illuminate\Support\Facades\Facade;

class ShaparakFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return __namespace__ . static::class;
    }

    public static function shouldProxyTo($class)
    {
        app()->singleton(self::getFacadeAccessor(), $class);
    }

}
