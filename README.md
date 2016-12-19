## About Your Package

Tell people about your package

## Installation

Require the package by running the following command:

```
composer require cleaniquecoders/subscriptions
```

Open up `config/app.php` and add the following in the `providers` key:

```php
CleaniqueCoders\Subscriptions\SubscriptionsServiceProvider::class,
```

Register Subscriptions Middleware in `app\Http\Kernel.php`

```php
'subscription' => \CleaniqueCoders\Subscriptions\Http\Middleware\PackageSubscription::class,
```

Run the following command to register all the subscription routes in `routes/web.php` and publish the `config/subscription.php`, `subscriptions` views and 
`seeds`.

```
php artisan subscription:install
```

## Usage

### Seeder

Open up `database/seeds/PackageSeeder.php` and update your SaaS Packages accordingly and run `php artisan db:seed --class=PackageSeeder`.

### Trait

You may add `use CleaniqueCoders\Traits\Subscriptions\User as Subscription;` in your `User` model class to enable relationship between user and subscribed package.

### Middleware

```php
Route::group(['middleware' => ['auth', 'subscription']], function () {
            Route::resource('secrets', 'YourSecretController');
});
```

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).