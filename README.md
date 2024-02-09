# Install

### Trait
Add  **HasActivityLogs** trait to User model

```php
use Atin\LaravelActivitylog\Traits\HasActivityLogs;

class User extends Authenticatable
{
    use HasActivityLogs, …
```

# Publishing
### Migrations
```php
php artisan vendor:publish --tag="laravel-activitylog-migrations"
```