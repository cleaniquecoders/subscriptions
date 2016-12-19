<?php

namespace CleaniqueCoders\Subscription\Routes;

/**
 * Subscriptions Routes
 */
class Subscription
{
    public static function routes()
    {
        Route::get('subscribe/{id}', '\CleaniqueCoders\Subscription\Http\Controllers\SubscriptionController@subscribe')->name('subscriptions.subscribe');
        Route::get('unsubscribed', '\CleaniqueCoders\Subscription\Http\Controllers\SubscriptionController@unsubscribed')->name('subscriptions.unsubscribed');

        Route::group(['middleware' => ['auth']], function () {
            Route::get('expired', '\CleaniqueCoders\Subscription\Http\Controllers\SubscriptionController@expired')->name('subscriptions.expired');
        });

        Route::group(['middleware' => ['auth', 'subscription']], function () {
            Route::resource('subscriptions', '\CleaniqueCoders\Subscription\Http\Controllers\SubscriptionController');
        });
    }
}
