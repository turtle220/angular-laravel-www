---
extends: _layouts.docs
section: body
title: Tutorial TDD
subtitle: We'll be following the Test Driven Development process
---


#TDD
<div class="subtitle">We'll be following the Test Driven Development process</div>

## Define the model factory

**ModelFactory.php**
```code
$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->text,
    ];
});
```

## Writing the test

```code
php artisan make:test GetAllPostsTest
```

**GetPostsTests.php**
```code
<?php

namespace Tests\Feature;

use Tests\TestCase;

class GetAllPostsTest extends TestCase
{
    public function testGetAllPosts()
    {
        $post = factory(\App\Post::class)->create();

        $this->get('api/posts')
        ->assertJsonFragment([
            'id' => $post->id,
            'title' => $post->title,
        ]);
    }
}
```
