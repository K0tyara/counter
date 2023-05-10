<?php

namespace Kotyara\Counter;

use Illuminate\Support\Facades\Facade;

class Counter extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return CounterService::class;
    }
}
