---
extends: _layouts.docs
section: body
title: Motivation
subtitle: The reason why this project was created.
---


#Motivation
<div class="subtitle">The reason why this project was created.</div>

##From Starter to Package

[Laravel Angular Material Starter](https://github.com/jadjoubran/laravel5-angular-material-starter) had a great success for bridging the gap between Laravel & Angular.
It paved the way to awesome features such as out of the box:
* AngularJS build tool setup
* API environment for Laravel with JWT authentication
* AngularJS generators for increased productivity
* and many more..

## Moving forward

As of Laravel 5.3, we started having a separate route file for API endpoints, as long as a dedicated API middelware.  
And as of Angular (>= 2), we now an official way of starting Angular projects with a pre-configured shell.  
This means that there's no need anymore for the Generators to be part of Laravel & Angular, same for Laravel's API environment.  
As the community has moved forward with these awesome additions, the role for Laravel & Angular started diminishing.  
This is why you'll find that this package focuses on solving the remaining pain-points by giving you a pleasurable experience developing Laravel & Angular apps.  

## Starter vs Package

Laravel Angular Material used to be a Starter which made it very easy for developers to start hacking on their projects.
However this had a lot of drawbacks, here are a few:
* Unnecessary dependencies
* Hard (or impossible to upgrade)
* Impossible to integrate with existing projects

This is why we now developed a package that can be easily integrated with existing apps & easily upgraded!
This also means, you could use the official (& recommended) @angular/cli to start your angular project or any other method you'd prefer.


<div class="info">
    <svg fill="#3f51b5" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0h24v24H0z" fill="none"/>
        <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z"/>
    </svg>
    <div>
        Are you looking for the documentation of the previous starter project?&nbsp;<a target="_blank" href="https://laravel-angular.readme.io/">Click here.</a>
    </div>
</div>
