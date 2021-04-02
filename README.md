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

