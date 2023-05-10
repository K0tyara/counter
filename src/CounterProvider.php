<?php

namespace Kotyara\Counter;

use Illuminate\Support\ServiceProvider;

class CounterProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register() : void
    {
        $this->app->singleton(CounterService::class, function ($app) {
            return new CounterService(rand(1,100));
        });
    }
}
