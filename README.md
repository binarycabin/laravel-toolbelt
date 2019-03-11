# Laravel Toolbelt

[![Build Status](https://travis-ci.org/binarycabin/laravel-toolbelt.svg?branch=master)](https://travis-ci.org/binarycabin/laravel-toolbelt)
[![StyleCI](https://github.styleci.io/repos/174015614/shield?branch=master)](https://github.styleci.io/repos/174701943)
[![Latest Stable Version](http://img.shields.io/packagist/v/binarycabin/laravel-toolbelt.svg?style=flat)](https://packagist.org/packages/binarycabin/laravel-toolbelt)
[![Total Downloads](http://img.shields.io/packagist/dt/binarycabin/laravel-toolbelt.svg?style=flat)](https://packagist.org/packages/binarycabin/laravel-toolbelt)

A handful of helper components and for Laravel

## Installation

```$xslt
composer require binarycabin/laravel-toolbelt
```

## Usage

### Commands

#### init:roles

If using spatie/laravel-permission and binarycabin/options, you can auto create your default roles using the command:

```
php artisan init:roles
```

Note you should also have ```use HasRoles;``` set on your User Model, and an array of options ready at \App\Options\Role;

#### make:user

Create a new user via cl using 

```
php artisan make:user
```

If using spatie/laravel-permission you can set a role for this user via:

```
php artisan make:user --role=admin
```

### Components:

#### Panels

```
@component('toolbelt::components.panel',['title'=>'Panel Title'])
    Panel Body Content
@endcomponent
```

#### Tables

(coming soon)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
