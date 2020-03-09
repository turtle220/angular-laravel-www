---
extends: _layouts.docs
section: body
title: Tutorial TDD
subtitle: Let's build an Angular Service that consumes this endpoint
---


#Angular Http
<div class="subtitle">Let's build an Angular Service that consumes this endpoint</div>

## Angular Service

<div class="filename">posts.service.ts</div>
```code
import { Injectable } from '@angular/core';
import { Http }       from '@angular/http';

import { Observable }     from 'rxjs/Observable';
import 'rxjs/add/operator/map';

@Injectable()
export class PostsService {

  constructor(private http: Http) {}

  getAll(): Observable {
    return this.http
               .get('api/posts')
               .map(response => response.json());
  }
}
```

