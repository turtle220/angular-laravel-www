---
extends: _layouts.docs
section: body
title: Documentation
subtitle: Installation steps for Laravel Angular package into your Laravel/Lumen app
---

#Install

<div class="subtitle">Installation steps for Laravel Angular package into your Laravel/Lumen app</div>

Laravel &amp; Angular is simply a PHP package for Laravel. It is not opinionated regarding your Angular app. However we recommend using the official @angular/cli tool.

##Laravel Installation

At the root level of your Laravel app, require the package using composer:

```code
composer require jadjoubran/laravel-angular
```

If you're using Laravel 5.5 or newer, you can skip this step.  
Inside your `config/app.php`, add the Service Provider:

```code
Jadjoubran\LaravelAngular\Provider\LaravelServiceProvider::class,
```

Then run the installation command

```code
php artisan laravelangular:install
```


##JWT Auth Installation

If you're interested in authenticating your users with statless Json Web Tokens, follow the <a href="/docs/1/jwt-auth-install" target="_blank">JWT installation instructions</a>

## Angular Installation

You can setup the Angular app in your own preferred way. This means, if you already have an Angular app, you don't have to change anything.

For your convenience, and if you're starting from scratch, you can follow the <a href="/docs/1/angular-install">Angular installation guide</a>.

##Lumen Installation

If you're using Lumen rather than Laravel, follow the instructions below.  
Require the package using composer, and then register the service provider.

```code
$app->register(App\Providers\AppServiceProvider::class);
```
