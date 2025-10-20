# LaravelCountryFlags Package for Laravel

[![GitHub](https://img.shields.io/github/stars/codepil0t/laravel-country-flags)](https://github.com/codepil0t/laravel-country-flags)

This package provides country flags for Laravel applications.

## Installation

Install via Composer:

```bash
composer require codepil0t/laravel-country-flags
```

## Publishing Assets

Publish the flag assets to your public directory:

```bash
php artisan vendor:publish --tag=flags
```

This will copy the flags to `public/flags/`.

## Usage

### In Blade Templates

Use the `@flag` directive:

```blade
<img src="@flag('de')" alt="Germany Flag">
```

Or use the helper function:

```blade
<img src="{{ flag_url('de') }}" alt="Germany Flag">
```

You can specify the aspect ratio (1x1 or 4x3, default is 4x3):

```blade
<img src="{{ flag_url('de', '1x1') }}" alt="Germany Flag">
```

### In PHP

```php
echo flag_url('de'); // /flags/4x3/de.svg
```

## Supported Countries

All ISO 3166-1 alpha-2 country codes are supported.
