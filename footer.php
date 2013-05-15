  <div class="push"></div>
  <footer>
    <aside class="wrap post">
      <ol class="previous-posts">
          <p class="recent-list">Previous Posts</p>
        <?php while(rwar_latest_posts()): ?>
            <li>
              <span class="recent-title"><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></span>
              <span class="date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></span>
            </li>
    <?php endwhile; ?>
  

      </ol>
      <div class="social right">
        <ul>
            <li><a id="mail" href="mailto:cole@coletownsend.com"><span class="icons">m</span><span class="foot-link">Contact Me</span></a></li>
        	<li><a id="twit" href="http://twitter.com/CTrunsthis" target="_blank"><span class="icons">T</span><span class="foot-link">CTrunsthis</span></a></li>
        	<li><a id="drib" href="http://dribbble.com/ColeTownsend" target="_blank"><span class="icons">D</span><span class="foot-link">ColeTownsend</span></a></li>
        </ul>
    </div>
    </aside>
  </footer>

  <!-- Grab some fresh-squeezed jquery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <!-- If they're out, get some from the cellar -->
  <script>window.jQuery || document.write('<script src="<?php echo theme_url('/js/jquery.js'); ?>"><\/script>')</script>
  <script src="http://coletownsend.com/web/content/script/waypoints.js"></script>

  <!-- Custom JS -->
  <script src="<?php echo theme_url('/js/scripts.js'); ?>"></script>

  <!-- All your data are belong to us -->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7422463-14']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <script type="text/javascript">
  var GoSquared = {};
  GoSquared.acct = "GSN-828852-T";
  (function(w){
    function gs(){
      w._gstc_lt = +new Date;
      var d = document, g = d.createElement("script");
      g.type = "text/javascript";
      g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
      var s = d.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(g, s);
    }
    w.addEventListener ?
      w.addEventListener("load", gs, false) :
      w.attachEvent("onload", gs);
  })(window);
</script>
  </body>
</html>