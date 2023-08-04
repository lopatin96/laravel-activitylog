<?php

namespace Atin\LaravelActivitylog;

use Illuminate\Support\ServiceProvider;

class ActivitylogProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('/migrations')
        ], 'laravel-activitylog-migrations');
    }
}