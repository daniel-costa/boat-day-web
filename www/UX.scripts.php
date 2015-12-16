
<script src="scripts/vendor/jquery/dist/jquery.min.js"></script>
<script src="scripts/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="scripts/vendor/seiyria-bootstrap-slider/js/bootstrap-slider.js"></script>
<script src="scripts/vendor/swiper/dist/js/swiper.jquery.js"></script>
<script src="scripts/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="scripts/vendor/underscore/underscore-min.js"></script>
<script src="scripts/vendor/parse/parse.min.js"></script>
<script src="scripts/main.js"></script>
<div id="fb-root"></div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      //appId      : '1501718213464671', //Test app
      appId      : '1442439216059238', //Production App
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-51849119-1', 'auto');
  ga('send', 'pageview');
</script>