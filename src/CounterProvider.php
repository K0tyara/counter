<?php

namespace Kotyara\Counter\src;

use Illuminate\Support\ServiceProvider;

class CounterProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register() : void
    {
        $this->app->singleton('counter', function () {
            return new CounterService(rand(0, 100));
        });
    }
}
