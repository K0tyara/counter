<?php

namespace Kotyara\Counter\src;

use Illuminate\Support\Facades\Facade;

class Counter extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'counter';
    }
}
