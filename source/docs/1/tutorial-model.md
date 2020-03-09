---
extends: _layouts.docs
section: body
title: Tutorial Model
subtitle: In this step, we'll generate the model, &amp; migration file
---

#Model setup
<div class="subtitle">In this step, we'll generate the model, &amp; migration file</div>

## Migration & Model
Let's start by generating the Model & the migration file.

```code
php artisan make:model Post -m
```

Then let's add the required fields to our migration file:

```code
$table->string('title');
$table->text('description');
```

Then run the migration

```code
php artisan migrate
```

