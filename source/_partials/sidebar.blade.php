<?php
$version = 1;
$prefix = "/docs/{$version}";
?>
<div class="title">Get started</div>

<a class="page {{$page->selected('docs/1')}}" href="{{$prefix}}/">Install</a>
<a class="page {{$page->selected('/docs/1/angular-install')}}" href="{{$prefix}}/angular-install">Angular Install</a>
<a class="page {{$page->selected('/docs/1/motivation')}}" href="{{$prefix}}/motivation">Motivation</a>

<div class="title">Tutorial</div>
<a class="page {{$page->selected('/docs/1/tutorial')}}" href="{{$prefix}}/tutorial">Overview</a>
<a class="page {{$page->selected('/docs/1/tutorial-tdd')}}" href="{{$prefix}}/tutorial-tdd">TDD</a>
<a class="page {{$page->selected('/docs/1/tutorial-model')}}" href="{{$prefix}}/tutorial-model">Model setup</a>
<a class="page {{$page->selected('/docs/1/tutorial-api')}}" href="{{$prefix}}/tutorial-api">API routes</a>
<a class="page {{$page->selected('/docs/1/tutorial-http')}}" href="{{$prefix}}/tutorial-http">Angular Http</a>
<a class="page {{$page->selected('/docs/1/tutorial-auth')}}" href="{{$prefix}}/tutorial-auth">Angular Auth</a>

<div class="title">Response Macros</div>
<a class="page {{$page->selected('/docs/1/response-macros')}}" href="{{$prefix}}/response-macros">Overview</a>
<a class="page {{$page->selected('/docs/1/response-macros-validations')}}" href="{{$prefix}}/response-macros-validations">Validations</a>

<div class="title">JWT Authentication</div>
<a class="page {{$page->selected('/docs/1/jwt-auth')}}" href="{{$prefix}}/jwt-auth">Overview</a>
<a class="page {{$page->selected('/docs/1/jwt-auth-install')}}" href="{{$prefix}}/jwt-auth-install">Install</a>
<a class="page {{$page->selected('/docs/1/jwt-auth-usage')}}" href="{{$prefix}}/jwt-auth-usage">Usage</a>
