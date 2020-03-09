<footer>
  <div class="footnote">
    <div class="text">An open source project by <a href="https://jadjoubran.io" target="_blank" rel="nofollow">Jad Joubran</a> <br>Design by <a href="https://nicolesaidy.com/" target="_blank" rel="nofollow">Nicole Saidy</a></div>
    <br>
    <div class="copyright">
      <a href="/contact-us">Contact</a>
      <a href="/privacy-policy">Privacy Policy</a>
      &copy; 2017 Laravel &amp; Angular
    </div>
  </div>
</footer>

<script async src="/js/mdc.base.min.js"></script>
<script async src="/js/mdc.ripple.min.js"></script>
<script>
  window.addEventListener('load', function(){
    var mdlButtons = document.querySelector('.mdc-button');
    if (mdlButtons){
      mdc.ripple.MDCRipple.attachTo(mdlButtons);
    }
    setTimeout(function(){
        document.getElementById('github-iframe').innerHTML = '<iframe class="github" width="160" height="30" src="https://ghbtns.com/github-btn.html?user=jadjoubran&repo=laravel-angular&type=star&count=true&size=large" frameborder="0"></iframe>';
    }, 350);
  });

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('set', 'anonymizeIp', true);
  ga('create', 'UA-71584128-2', 'auto');
  ga('send', 'pageview');
</script>
