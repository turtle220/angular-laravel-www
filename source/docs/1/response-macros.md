---
extends: _layouts.docs
section: body
title: Response Macros
subtitle: Re-usable custom responses.
---

##Response Macros

<div class="subtitle">Re-usable custom responses.</div>

##Overview

[Response macros](https://laravel.com/docs/responses#response-macros) are originally a feature in the Laravel framework.

REST APIs need to be consistent so we've provided you with 2 default response macros that will let you return `success` and `error` data from your endpoints.

<div class="filename">PostsController.php</div>
```code
<?php

class PostsController
{
    public function get()
    {
        $posts = App\Post::all();

        return response()->success('posts', $posts);
    }

    public function update()
    {
        if ( !\Auth::user() ){
          return response()->error('Not Authorized', 401);
        }
    }

}
```

## Success

The success interceptor, wraps your $results with the following structure:

<div class="filename">Response</div>
```code
[
    'errors' => false,
    'data' => $results
]
```

## Error

The error interceptor, returns an error message that can be directly used on the front-end, the error code as well as an additional `info` array:

<div class="filename">Response</div>
```code
'message' => '422 error',
'errors' => [
    'message' => $message,
    'info' => $additional_info,
],
'status_code' => 422
```

The error interceptor's status code defaults to 422, unless overriden.

```code
response()->error($error_message, $status_code = 422)
```
