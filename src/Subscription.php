<?php

namespace CleaniqueCoders\Subscriptions;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'name', 'label',
        'status', 'type', 'duration',
        'price', 'details', 'meta',
    ];

    protected $casts = [
        'meta' => 'array',
    ];

    public function users()
    {
        return $this->belongsToMany(config('subscriptions.model'));
    }
}
