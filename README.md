# Publishing
### Migrations
```php
php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider" --tag="activitylog-migrations"
```

and

```php
php artisan migrate
```