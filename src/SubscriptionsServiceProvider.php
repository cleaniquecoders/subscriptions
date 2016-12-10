<?php

namespace CleaniqueCoders\Subscriptions;

use Illuminate\Support\ServiceProvider;

class SubscriptionsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/resources/views' => resource_path('views/vendor/subscriptions'),
                __DIR__ . '/config' => config_path(),
            ], 'splate-subscriptions');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
