# LaraBase
LaraBase is a Laravel repository with basic authentication implementing Laravel Socialite and Material Dashboard by Creative Tim.

## Tech
* [Laravel Framework v5.5](https://laravel.com/) - PHP Framework
* [Laravel Socialite](https://github.com/laravel/socialite) - OAuth authentication with Facebook, Google and more
* [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar) - Debug bar for helping development
* [Material Dashboard](https://www.creative-tim.com/product/material-dashboard) * Dashboard template with Twitter Bootstrap, jQuery, Chartist and Bootstrap Notify
* [Material Kit](https://www.creative-tim.com/product/material-kit) - UI kit for the landing page

### Features and changes
* Vue.js was removed
* User can be logged and/or registered via Facebook and Google apps
* Both landing page and dashboard are in material design

## Installation
Laravel 5.5 requires:
* PHP >= 7.0.0
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

Make sure all dependencies are installed, then clone the project:

```
cd your-projects-folder
git clone https://github.com/ninamarra/larabase.git
cd larabase
```

Generate your app key and install all project dependencies...

```
composer install
php artisan key:generate
npm install
npm run dev
```

For starting the project run `$ php artisan serve` and open on your terminal the following adress:

```
127.0.0.1:8000
```

### Development

LaraBase is a project in development. Just a starter pack but be welcome to suggest new things.

License
----
MIT
**Free Software, Hell Yeah!**
