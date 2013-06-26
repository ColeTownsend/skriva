<script src="http://coletownsend.com/web/content/plugins/ChartwellBarsVertical/chartwell.min.js"></script>
<script src="http://coletownsend.com/web/content/plugins/ChartwellBarsVertical/chartwell_barsvertical.min.js"></script>
    <!--[if lt IE 9]>
     <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
      <script src="http://coletownsend.com/web/content/plugins/ChartwellBarsVertical/excanvas.min.js"></script>
    <![endif]-->

<script>
	window.onload = function(){
		FFChartwell()
	}
</script>
<?php theme_include('header'); ?>
    <section class="article" id="article-<?php echo article_id(); ?>">
      <div class="overlay"></div>
      <div class="abt-featured">
          <div class="abt-avatar"><img class="scale" src="http://coletownsend.com/themes/zleek-master/img/hero/Face-1.gif" alt="" /></div>
          <h1 class="about-me">Aesthete & Athlete</h1>
      </div>

      <article class="wrap post about-wrap">     
      <p>I'm a designer and front end developer from Buffalo, NY. I love a nice set of pixels almost as much as much as a cool morning and open roads. If I'm not running, you'll find me illustrating, designing, or coding something neat.</p>   
<!--         <p>I love hearing from other designers or those interested in starting. Please feel free to send me an email or get at me on <a href="https://twitter.com/ctrunsthis" target="_blank">Twitter</a>.</p> -->
        
        
        <article class="data-blocks">
            
            <div class="miles-today">
                <h3>Latest Run</h3>
                <span class="today"></span>
            </div>
            <div class="pixels-drib">
                <h3>Pixels Dribbbled</h3>
                <span class="pixels"></span>
            </div>
        </article>
        <article class='data-blocks'>
            <h3>The Latest</h3>
            <span id='tweets'></span>
        </article>
        <article class="data-blocks">
            <div class="miles-this-week">
                <h3>Miles This Week</h3>
                <div class="mileage">                
                    <span class="week weekA chartwell barsvertical"></span>
                    <span class="week weekB chartwell barsvertical"></span>
                </div>
            </div>
            <div class="scrobble">
                <h3>Currently Playing</h3>
                <span class='artist'></span>
                <span class='track'></span>
            </div>
        </article>
    
      </article>
    </section>
</div>

<script src='http://coletownsend.com/themes/zleek-master/js/tweets.js'></script>
<script src="http://coletownsend.com/themes/zleek-master/js/stats.js"></script>
<script src="http://coletownsend.com/web/content/script/jribbble.js"></script>
<script src="http://coletownsend.com/themes/zleek-master/js/shots.js"></script>
<script src='http://coletownsend.com/themes/zleek-master/js/songs.js'></script>
<?php theme_include('footer'); ?>