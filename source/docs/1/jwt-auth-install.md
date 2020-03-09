---
extends: _layouts.docs
section: body
title: JWT Authentication
subtitle: Installation instructions for JWT Authentication
---

##JWT Auth Installation

<div class="subtitle">Installation instructions for JWT Authentication</div>

##Install tymon/jwt-auth

Require the package using composer:
```code
composer require tymon/jwt-auth:^1.0@dev
```
Add the service provider in config/app.php
```code
Tymon\JWTAuth\Providers\LaravelServiceProvider::class,
```
Publish the vendor config file:
```code
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
```
Generate the JWT
```code
php artisan jwt:secret
```

  
  &nbsp;
#Install irazasyed/jwt-auth-guard
Require the package using composer:
```code
composer require irazasyed/jwt-auth-guard
```
Add the service provider in config/app.php
```code
Irazasyed\JwtAuthGuard\JwtAuthGuardServiceProvider::class,
```
Setup the Guard driver in your config/auth.php
```code
'guards' => [
    'api' => [
        'driver' => 'jwt-auth',
        'provider' => 'users'
    ],
    // ...
],
```

##Update unauthorized format
We still need to update the format of the authorized response to match our [response macros](/docs/1/response-macros).

Replace the `unauthenticated` method in `app/Exceptions/Handler.php`  with the below:

```code
protected function unauthenticated($request, AuthenticationException $exception)
{
    if ($request->expectsJson()) {
        return response()->error('Unauthenticated.', 401);
    }

    return redirect()->guest(route('login'));
}
```

You're all set!
