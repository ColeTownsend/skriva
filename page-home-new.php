<?php theme_include('header'); ?>
<script> 
    $(document).ready(function() {
        $('#main-nav').localScroll({duration:800,});
    });
</script>
    
 <script> 
	    $(document).ready(function() {
  $('#arrow').localScroll({duration:600, });
  $('#hire-me').localScroll({duration:1000});
});
</script>
    
 <script>
	$(document).scroll(function() {
    var scroll_pos = $(this).scrollTop();
    var tripline = $("#tripwire").offset().top;

    if(scroll_pos >= tripline) {
		$(".window").css("display","block");
		$(".window").addClass("slide");
}
});
</script>

<!--
 <script>
	$(document).scroll(function() {
    var scroll_pos = $(this).scrollTop();
    var tripline = $("#tripwire-2").offset().top;

    if(scroll_pos >= tripline) {		
		setTimeout(function() {
    		$(".g3.first").css("display","inline-block");
    		$(".g3.first img").css("-webkit-animation-delay","0s").addClass("scale");
    		$(".first p, .first h2").addClass("invisi");
    		// $(".first p, .first h2").css("-webkit-animation-delay","0s").addClass("fadeIn");
}, 0);
        setTimeout(function() {
            $(".first p, .first h2").removeClass("invisi").css("-webkit-animation-delay","0s").addClass("fadeIn");
        }, 400);

		setTimeout(function() {
    		$(".g3.second").css("display","inline-block");
    		$(".second p, .second h2").addClass("invisi");
    		$(".g3.second img").css("-webkit-animation-delay","0s").addClass("scale");
}, 900);

        setTimeout(function() {
            $(".second p, .second h2").removeClass("invisi").css("-webkit-animation-delay","0s").addClass("fadeIn");
        }, 1300);

		setTimeout(function() {
    		$(".g3.third").css("display","inline-block");
    		$(".third h2, .third p").addClass("invisi");
    		$(".g3.third img").css("-webkit-animation-delay","0s").addClass("scale");
}, 1900);

    setTimeout(function() {
            $(".third p, .third h2").removeClass("invisi").css("-webkit-animation-delay","0s").addClass("bounceDown");
        }, 2200);
		
}
});
</script>
-->

    <section class="portf" id="sl1">
        <article class="wrap">
            <aside class="center-me">
             <img class="avatar" src="/blog/themes/zleek-master/img/me%20copy.jpg" alt="Cole Townsend, it's a pleasure." />
             <div class="intro">
                 <p><h1>Hello, I'm Cole.</h1></p>
                 <p><h2>I'm a web and UI Designer.</h2></p>
             </div>
             </aside>
             <a class="arrow" id="arrow" href="#sl2"><i class="icon-arrow-down"></i></a>
        </article>
    </section> 
    <div id="tripwire"></div>
     <section class="portf" id="sl2">
        <article class="wrap-alt">
             <aside class="cta g2">
                 <h1>I Create The Web</h1>
                 <a class="button hire-me" id="hire-me" href="#sl5">WORK WITH ME</a>
             </aside>
             <aside class="code g2">
                <img class="window" src="http://f.cl.ly/items/2w0Q3N2o2Z1g3q0q1z3p/code.svg" alt="" />
             </aside>
        </article>
    </section> 
<div id="tripwire-2"></div>    
     <section class="portf " id="sl3">
        <article class="wrap-alt">
            <h1>Handled With Care</h1> 
            <section class="g-wrap">
                <aside class="g3 first">
                    <img src="/blog/themes/zleek-master/img/dotted.png" alt="" />
                    <h2>Sketch</h2>
                    <p>Everything starts out with paper and pen. I think about interactions before I even consider visuals.</p>
                </aside>
                <aside class="g3 second delay1">
                    <img src="/blog/themes/zleek-master/img/mockup.png" alt="" />
                    <h2>Create</h2>
                    <p>I go straight from sketches to high fidelity designs. I work in Sketch or Photoshop and couple mockups with interactive prototypes.</p>
                </aside>
                <aside class="g3 third delay2">
                    <img src="/blog/themes/zleek-master/img/code-small.png" alt="" />
                    <h2>Execute</h2>
                    <p>For web based projects, I take my mockups to the browser. My websites are responsive and retina-ready (no blurry pixels here).</p>
                </aside>
            </section>
        </article>
    </section> 
    
    <section class="portf" id="sl4">
        <article class="wrap-alt">
           	<div class="work" id="work">
			<!-- Booyah Jribble -->				
			</div> <! -- End WORK -->
        </article>
     </section> 
     
     <section class="portf" id="sl5">
        <article class="wrap-alt">
             <h1>Let's Work Together</h1>
                <section class="contact-form" id="contact-form">
                    <?php theme_include('mail-form'); ?>
        		</section>	

        </article>
     </section> 
    
</div>


  <!-- Grab some fresh-squeezed jquery -->

  
  <!-- If they're out, get some from the cellar -->
<script>window.jQuery || document.write('<script src="<?php echo theme_url('/js/jquery.js'); ?>"><\/script>')</script>
  <!-- Custom JS -->
  <script src="<?php echo theme_url('/js/scripts.js'); ?>"></script>
  <script src="/web/content/script/smoothScroll.js"></script>
  
<!--   jribbble -->
  <script src="http://coletownsend.com/web/content/script/jribbble.js"></script>
  <script src="http://coletownsend.com/blog/themes/zleek-master/js/dribbble.js"></script>
  

  
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