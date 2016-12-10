<?php

namespace CleaniqueCoders\Subscriptions\Subscriptions;

use Illuminate\Database\Eloquent\Model;

class SubscriptionUser extends Model
{
    protected $table = 'subscription_user';

    protected $fillable = [
        'subscription_id', 'user_id', 'status', 'subscribed_at', 'expired_at',
    ];

    protected $dates = [
        'subscribed_at',
        'expired_at',
        'created_at',
        'updated_at',
    ];
}
