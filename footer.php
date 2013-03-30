  <div class="push"></div>
  <footer>
    <aside class="wrap post">
      <ol class="previous-posts">
        <?php if(has_posts()): ?>
          <p class="recent-list">Previous Posts</p>
          <!-- We have posts, it's safe to loop. -->
          <?php while(posts(posts_per_page())): ?>
            <li>
              <span class="recent-title"><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></span>
              <span class="date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></span>
            </li>
          <?php endwhile; ?>
        <?php else: ?>
          <p>Looks like someone's been slacking. Or maybe working too hard.</p>
        <?php endif; ?>
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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <!-- If they're out, get some from the cellar -->
  <script>window.jQuery || document.write('<script src="<?php echo theme_url('/js/jquery.js'); ?>"><\/script>')</script>

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
  </body>
</html>