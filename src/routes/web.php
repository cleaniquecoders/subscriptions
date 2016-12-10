<?php

Route::group(['middleware' => ['auth']], function () {
    Route::get('subscribe/{id}', 'SubscriptionsController@subscribe')->name('subscriptions.subscribe');
    Route::get('unsubscribed', 'SubscriptionsController@unsubscribed')->name('subscriptions.unsubscribed');
    Route::get('expired', 'SubscriptionsController@expired')->name('subscriptions.expired');

    Route::group(['middleware' => ['subscription']], function () {
        Route::resource('packages', 'SubscriptionsController');
    });
});
