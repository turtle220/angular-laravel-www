---
extends: _layouts.docs
section: body
title: Validation errors
subtitle: Validation errors return the same format as the error response macro.
---

#Validations
<div class="subtitle">Validation errors return the same format as the error response macro.</div>


## WantsJson

If you test validations errors in your brower, you will most likely get a redirection.  
That's because internally, Laravel makes use of the `wantsJson` method and only serves Json if you request a Json response.

In order to request a Json response, you have to set the following header:

```code
Accept: application/json
```

## When validation fails

Laravel's validation feature will return the same format as the `response()->error()` macro.

<div class="filename">PostsController.php</div>
```code
<?php

class PostsController
{
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'url'   => 'required|url',
        ]);
        ...
    }
}
```

If this validation fails, you will get the following response:

<div class="filename">Response</div>
```code
{
    "message":"422 error",
    "errors":{
        "message":"The title field is required.",
        "info":["title"]
    },
    "status_code":422
}
```

✅ You can directly use the `errors.message` in your front-end.  
✅ You can access the field for which the validation failed under `errors.info[0]`.  
✅ Only the first validation error will be returned, even if more than one have failed.  


<div class="info">
    <svg fill="#3f51b5" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0h24v24H0z" fill="none"/>
        <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"/>
    </svg>
    <div>
        This customization is installed in your app\Http\Controller.php under the formatValidationErrors method.
    </div>
</div>
