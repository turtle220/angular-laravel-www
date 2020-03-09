---
extends: _layouts.docs
section: body
title: Angular install guide
subtitle: Installation steps for your Angular app
---

#Angular Install

<div class="subtitle">Installation steps for your Angular app</div>

##Where should you install Angular?

A common dilemma when setting up your Laravel & Angular app is whether you should install your Angular app inside your Laravel App.

The answer is: **it depends**.

It depends on the project size, number of developers & your personal preference.

Our personal recommendation would be to separate these 2 apps. Have one repository for Laravel (acting as an API) and another repo for your Angular app (front-end).

The benefit of this is clear separation, easier & separate deployment of your backend & front-end.

## Angular Setup

You need to globally install the Angular CLI (<a href="https://cli.angular.io" target="_blank">official docs</a>)

```code
npm install -g @angular/cli
```

then you can create your new app by running:

```code
ng new my-app-name
```

then `cd` into the newly created folder and serve your application:

```code
ng serve
```
