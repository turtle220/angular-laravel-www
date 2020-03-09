---
extends: _layouts.docs
section: body
title: JWT Authentication Usage
subtitle: Using the JWT Auth Guard
---

##JWT Auth Usage

<div class="subtitle">Using the JWT Auth Guard</div>

### Middleware

In order to protect a certain route with the JWT Auth Guard, you need to specify `auth:api` as a middleware. Just like the example already present in your `routes/api.php`.

### Creating tokens

You can create a token by attempting to login with user's credentials.
```code
$token = Auth::attempt(['email' => 'email@domain.com', 'password' => 'secret']);
```


### Checking for authentication

You can check whether the user is authenticated
```code
if (Auth::check()) {
    //
}
```
or not
```code
if (Auth::guest()) {
    //
}
```

## Get Authenticated User
You can get the authenticated user
```code
$user = Auth::user();
```

Explore the <a href="https://github.com/irazasyed/jwt-auth-guard" target="_blank">full documentation</a>.
