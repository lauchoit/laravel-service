#Get Started

# Laravel PHP Artisan Make:Service
A simple package for addding `php artisan make:service` command to Laravel 7+ and above

## Installation
Require the package with composer using the following command:

`composer require lauchoit/laravel-service --dev`

Or add the following to your composer.json's require-dev section and `composer update`

```json
"require-dev": {
    "lauchoit/laravel-service": "dev-main",
}
```
## Usage
`php artisan make:service your-service-name`

Example:
```
php artisan make:service User
            or
php artisan make:service UserService
```
or
```
php artisan make:service User\User
            or
php artisan make:service User\UserService
```

This packet creates the Services folder inside the app.

Example:

```
<?php

namespace DummyNamespace;

use LauchoIT\LaravelService\Service\BaseService;

/**
 * Class DummyClass.
 */
class DummyClass extends BaseService
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        //return YourModel::class;
    }
}

```

More informations visit https://lauchoit.com



