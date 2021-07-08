<?php

namespace Uniqud\LaravelAgent;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes(
            [
                __DIR__ . '/../config/laravel-agent.php' => config_path('laravel-agent.php'),
            ], 'config'
        );
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
