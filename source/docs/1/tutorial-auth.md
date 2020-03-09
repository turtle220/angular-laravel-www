---
extends: _layouts.docs
section: body
title: Tutorial Authentication
subtitle: This step of the tutorial covers adding Json Web Token authentication to your project.
---


#Adding Authentication
<div class="subtitle">This step of the tutorial covers adding Json Web Token authentication to your project.</div>

## JWT Auth setup

Assuming you've follwed the [JWT installation steps](/docs/1/jwt-auth-install), follow the instructions below to require *authentication* when accessing the `api/posts` endpoint. 

Replace your previous API route with one the ways below:

<div class="filename">routes/api.php</div>
```code
Route::middleware('auth:api')->get('/posts', 'PostsController@index');

//or

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/posts', 'PostsController@index');
});
```
Voila! You will need to provide an Authorization header to be able to access this endpoint.


##Creating tokens 

Make sure to follow the [JWT Usage](/docs/1/jwt-auth-usage/) docs in order to generate tokens, check for authentication and more.
