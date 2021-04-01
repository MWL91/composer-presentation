# Composer presentation
How to make reusable code?

Polish version of this presentation you may find at:
https://docs.google.com/presentation/d/1T5EL4nj3UuLyXjORtK86YzQ8DK58Xff5iIWvoTeEW10/edit

## Why you should use packages?

1. Keep reusable code that you can use in any project.
2. Work faster, more effective and keep quality at highest level.
3. Easy split work through all team members.
4. Easy code access, without unnecessary side effects. 
5. More independent than monolith, that allows you for easier refactors.

## How to initialize package?

### Composer init 
See branch: stage/1

#### Add to required

```
{
    "php": ">=7.4",
    "laravel/framework": ">=7.0",
}
```

#### Add to require-dev

```
{
    "phpunit/phpunit": "^9.0",
    "orchestra/testbench": ">=5.0"
}
```

Then install your composer.

### Namespace register
See branch: stage/2

Add your package namespaces to composer for example

```
"autoload": {
    "psr-4": {
        "Escola\\Presentation\\": "src",
        "Escola\\Presentation\\Tests\\": "tests",
        "Database\\Factories\\Escola\\Presentation\\Models\\": "database/factories"
    }
},
```

And create dirs:

```
mkdir ./src
mkdir ./tests
mkdir -p ./database/factories
```

## How to write Laravel package
See branch: stage/3

### Defining ServiceProvider

#### Add Extra Composer key

```
"extra": {
    "laravel": {
        "providers": [
            "Escola\\Presentation\\PackageServiceProvider"
        ]
    }
}
```

#### Create PackageServiceProvider class

Create class that extends `Illuminate\Support\ServiceProvider` and contains methods register and boot

```php
namespace Escola\Presentation;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        
    }
}
```

#### Defining and loading migrations and factories

See branch: stage/4

```php
$this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
```

All migrations will be now running from `./database/migrations` directory.

#### Configuration setup

Into your Service provider add 

```php
$this->mergeConfigFrom(
    __DIR__ . '/config.php', 'presentation'
);
```

Your config will be available under `config("presentation.KEY")`.

#### Publishing files form library

See branch: stage/5

In final, we should also tell laravel, that this files may be also overwritten after publish.

To do that, add publishes method with array with key as file and value as publish destination.

```php
$this->publishes([
     __DIR__ . '/config.php' => config_path('presentation.php')
], 'presentation');
```

4. Orchestra testbench as testing framework

## How to use packages

1. path including
2. git link
3. packagist


