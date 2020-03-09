<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
$title = $page->title ? "$page->title | ": '';
$title = $title . "Laravel & Angular";
$subtitle = $page->subtitle ?: "Build consistent APIs with Laravel & Angular package.";
$subtitle = "Laravel & Angular. ".$subtitle;
?>
<title>{{ $title }}</title>

<meta name="theme-color" content="#ffffff">

<meta name="description" content="{{$subtitle}}">

<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{$title}}">
<meta name="twitter:description" content="{{$subtitle}}">
<meta name="twitter:image" content="/images/about.png">

<meta name="og:title" content="{{$title}}" />
<meta name="og:type" content="article" />
<meta name="og:image" content="/images/about.png" />
<meta name="og:description" content="{{$subtitle}}" />
<meta name="og:site_name" content="Laravel & Angular" />

<style>
    :root{
      --dark: #21455B;
      --light: #59717F;
      --primary: #3f51b5;
  }
  body{
      margin: 0;
      color: var(--dark);
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
  }
</style>
<link rel="stylesheet" href="/css/main.css?v=3">

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
