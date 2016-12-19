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
        if ($this->app->runningInConsole()) {

            $this->loadMigrationsFrom(dirname(__FILE__) . '/database/migrations/');

            if ($this->app->environment('local', 'staging')) {
                $this->commands([
                    \CleaniqueCoders\Subscriptions\Console\Commands\Subscription::class,
                ]);
            }

            $this->publishes([
                __DIR__ . '/config' => config_path(),
                __DIR__ . '/database/seeds' => database_path('seeds'),
                __DIR__ . '/resources/views' => resource_path('views/vendor/subscriptions'),
            ], 'subscriptions');
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
