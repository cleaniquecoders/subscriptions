## About Your Package

Tell people about your package

## Installation

```
composer require cleaniquecoders/subscriptions
```

Open up `config/app.php` and add the following in the `providers` key:

```php
CleaniqueCoders\Subscriptions\SubscriptionsServiceProvider::class,
```

Register Subscriptions Middleware in `app\Http\Kernel.php`

```php
'subscription' => \Splate\Http\Middleware\PackageSubscription::class,
```

Publish package configurations and views:

```
php artisan vendor:publish --tag=splate-subscriptions
```

## Usage

```
How to use your package?
```

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).