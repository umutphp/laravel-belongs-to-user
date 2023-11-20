# Laravel Belongs To User Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/umutphp/laravel-belongs-to-user.svg?style=flat-square)](https://packagist.org/packages/umutphp/laravel-belongs-to-user)
[![Total Downloads](https://img.shields.io/packagist/dt/umutphp/laravel-belongs-to-user.svg?style=flat-square)](https://packagist.org/packages/umutphp/laravel-belongs-to-user)

---

If you are creating your own trait to have "belongsTo" User relationship in every model needed, you can also use this package not to define the trait on your own.

## Installation

You can install the package via composer:

```bash
composer require umutphp/laravel-belongs-to-user

php artisan vendor:publish --provider="UmutPHP\BelongsToUser\BelongsToUserServiceProvider"

```

## Usage

```php
...

use Illuminate\Database\Eloquent\Model;
use UmutPHP\BelongsToUser\BelongsToUser;

class UserData extends Model
{
    use BelongsToUser;

    ...
}

```

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [Umut Işık](https://github.com/umutphp)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
