---
extends: _layouts.docs
section: body
title: Tutorial API
subtitle: In this step, we'll write the controller method that will return the list of all posts
---

#API routes
<div class="subtitle">In this step, we'll write the controller method that will return the list of all posts</div>


## Controller setup

Let's start by generating the controller:

```code
php artisan make:controller PostsController
```

Register in the endpoint in `routes/api.php`

```code
Route::get('/posts', 'PostsController@index');
```

## Controller method

```code
<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return response()->success(compact('posts'));
    }
}
```
