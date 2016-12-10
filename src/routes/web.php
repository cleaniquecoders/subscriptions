<?php

Route::group(['middleware' => ['auth']], function () {
    Route::get('subscribe/{id}', 'CleaniqueCoders\Subscriptions\Http\Controllers\SubscriptionController@subscribe')->name('subscriptions.subscribe');
    Route::get('unsubscribed', 'CleaniqueCoders\Subscriptions\Http\Controllers\SubscriptionController@unsubscribed')->name('subscriptions.unsubscribed');
    Route::get('expired', 'CleaniqueCoders\Subscriptions\Http\Controllers\SubscriptionController@expired')->name('subscriptions.expired');

    Route::group(['middleware' => ['subscription']], function () {
        Route::resource('subscriptions', 'CleaniqueCoders\Subscriptions\Http\Controllers\SubscriptionController');
    });
});
