<?php

namespace NickDeKruijk\LaravelRobots;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish config file.
        $this->publishes([
            __DIR__ . '/config.php' => config_path('robots.php'),
        ], 'config');

        // Load the routes needed for admin.
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config.php', 'robots');
    }
}
