<?php

namespace Kotyara\Counter;

use Illuminate\Support\Facades\Facade;

class Counter extends Facade
{
    public static function getFacadeAccessor()
    {
        return CounterService::class;
    }
}
