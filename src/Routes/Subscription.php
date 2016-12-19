<?php

namespace CleaniqueCoders\Subscriptions\Routes;

use Illuminate\Support\Facades\Route;

/**
 * Subscriptions Routes
 */
class Subscription
{
    public static function routes()
    {
        Route::get('subscribe/{id}', '\CleaniqueCoders\Subscriptions\Http\Controllers\SubscriptionController@subscribe')->name('subscriptions.subscribe');
        Route::get('unsubscribed', '\CleaniqueCoders\Subscriptions\Http\Controllers\SubscriptionController@unsubscribed')->name('subscriptions.unsubscribed');

        Route::group(['middleware' => ['auth']], function () {
            Route::get('expired', '\CleaniqueCoders\Subscriptions\Http\Controllers\SubscriptionController@expired')->name('subscriptions.expired');
        });

        Route::group(['middleware' => ['auth', 'subscription']], function () {
            Route::resource('subscriptions', '\CleaniqueCoders\Subscriptions\Http\Controllers\SubscriptionController');
        });
    }
}
