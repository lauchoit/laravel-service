#Get Started

# Laravel PHP Artisan Make:Service
A simple package for addding `php artisan make:service` command to Laravel 7+ and above

## Installation
Require the package with composer using the following command:

`composer require lauchoit/laravel-service --dev`

Or add the following to your composer.json's require-dev section and `composer update`

```json
"require-dev": {
          "jason-guru/laravel-make-repository": "^0.0.2"
}
```
## Usage
`php artisan make:repository your-repository-name`

Example:
```
php artisan make:repository UserRepository
```
or
```
php artisan make:repository Backend\UserRepository
```

The above will create a repositories directory inside the app directory.

Once the repository is generated add your model class and return it in the model function,

Example:

```
<?php

namespace DummyNamespace;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DummyClass.
 */
class DummyClass extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        //return YourModel::class
    }
}

```

<a href="https://www.buymeacoffee.com/fMy8dmHGl" target="_blank"><img src="https://bmc-cdn.nyc3.digitaloceanspaces.com/BMC-button-images/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: auto !important;width: auto !important;" ></a>



