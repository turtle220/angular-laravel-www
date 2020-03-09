@extends('_layouts.master')

@section('body')

<div id="particles-js"></div>
<div id="hero">
    <div>
      <h3>Build your next powerful web app</h3>
      <h1>
        Laravel &amp; Angular Package
    </h1>

    <a class="mdc-button mdc-button--raised mdc-button--primary" href="/docs/1/">Get Started</a>
</div>
</div>

<div id="code">
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2"></div>
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-8">
                <div>
                    <h2 class="title">Laravel</h2>
                    <div class="subtitle">Response macros integrated with your Angular app</div>

                    <div class="DemoCode">
                        <span class="DemoCode-operator">&lt;?php</span><br>
                        <br>
                        <span class="DemoCode-highlight">class</span> <span class="DemoCode-secondary">PostsController</span><br>
                        {<br>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;public <span class="DemoCode-secondary">function</span> <span class="DemoCode-highlight">get</span>()<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;{<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="DemoCode-secondary">$posts</span> = <span class="DemoCode-highlight">App</span>\<span class="DemoCode-highlight">Post</span>::<span class="DemoCode-secondary">get</span>();<br>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="DemoCode-highlight">return</span> <span class="DemoCode-secondary">response</span>()-&gt;<span class="DemoCode-secondary">success</span>(compact(<span class="DemoCode-string">'posts'</span>));<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;}<br>}
                        <br>
                    </div>
                </div>
            </div>
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2"></div>
        </div>
    </div>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
          <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2"></div>
          <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-8">
            <div>
              <h2 class="title">Angular</h2>
              <div class="subtitle">Query your API without worrying about validations</div>

              <div class="DemoCode">
                <span class="DemoCode-secondary">export class</span> <span class="DemoCode-highlight">PostsService</span> {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="DemoCode-highlight">constructor</span>(<span class="DemoCode-secondary">private</span> http: Http){}<br>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span class="DemoCode-highlight">getAll</span>(){<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="DemoCode-secondary">return</span> <span class="DemoCode-highlight">this</span>.http<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.get(<span class="DemoCode-string">'api/posts'</span>)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.map(response <span class="DemoCode-secondary">=></span> response.json());<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
            }
            <br></div>
        </div>
    </div>
    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2"></div>
</div>
</div>
</div>

<div id="features">
    <h2>The right features to get you started</h2>

    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
          <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2"></div>
          <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-8-tablet">
            <div class="feature">
              <img src="images/restful.svg" alt="">
              <h3>RESTful API</h3>
              <div class="text">Build consistent REST APIs and call them fluently using JS, without worrying about validation errors</div>
              <br>
          </div>
      </div>
      <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-8-tablet">
        <div class="feature">
          <img src="images/json.svg" alt="">
          <h3>Json Web Token Auth</h3>
          <div class="text">Get an out-of-the-box JWT Authentication in your app that allows you to authenticate users on the fly</div>
      </div>
  </div>
  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2"></div>
</div>
</div>
</div>

<script async src="/js/particles.js"></script>
<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "SoftwareSourceCode",
      "creator": {
        "@type": "Person",
        "name": "Jad Joubran"
    },
    "codeRepository": "https://github.com/jadjoubran/laravel-angular",
    "programmingLanguage": "php",
    "headline": "Laravel & Angular",
    "isBasedOn": [{
        "@type": "CreativeWork",
        "name": "Laravel"
    }, {
        "@type": "CreativeWork",
        "name": "Angular"
    }],
    "keywords": "Laravel,Angular,API,javascript",
    "text": "Laravel & Angular package",
    "image": "/images/about.png",
    "url": "https://laravel-angular.io"
}
</script>
@endsection
