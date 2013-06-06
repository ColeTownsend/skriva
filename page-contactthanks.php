<div id="bump">
<?php theme_include('header'); ?>
<script> 
    $(document).ready(function() {
        $('#main-nav').localScroll({duration:800,});
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
             <img class="avatar" src="/themes/zleek-master/img/me%20copy.jpg" alt="Cole Townsend, it's a pleasure." />
             <div class="intro">
                 <p><h1>Hello, I'm Cole.</h1></p>
                 <p><h2>I'm a web and <visual></visual> Designer.</h2></p>
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
     <section class="portf" id="sl3">
        <article class="wrap-alt">
            <h1>Project Process</h1> 
            <section class="g-wrap">
                <aside class="g3 first">
                    <img src="/themes/zleek-master/img/dotted.png" alt="" />
                    <div class="info">
                    <h2>Sketch</h2>
                    <p>Everything starts out with paper and pen. I think about interactions before I even consider visuals.</p>
                    </div>
                </aside>
                <aside class="g3 second delay1">
                    <img src="/themes/zleek-master/img/mockup.png" alt="" />
                    <div class="info">
                    <h2>Create</h2>
                    <p>I go straight from sketches to high fidelity designs. I work in Sketch or Photoshop and couple mockups with interactive prototypes.</p>
                    </div>
                </aside>
                <aside class="g3 third delay2">
                    <img src="/themes/zleek-master/img/code-small.png" alt="" />
                    <div class="info">
                    <h2>Execute</h2>
                    <p>For web based projects, I take my mockups to the browser. My websites are responsive and retina-ready (no blurry pixels here).</p>
                    </div>
                </aside>
            </section>
        </article>
    </section> 
    
    <section class="portf" id="sl4">
        <article class="wrap-alt">
            <h1>Latest Doodles</h1>
           	<div class="work" id="work">
			
               	    <p></p>
			<!-- Booyah Jribble -->	
						
			</div> <! -- End WORK -->
        </article>
     </section> 
     
     <section class="portf" id="submitted">
        <article class="wrap-alt">
             <h1 class="sl-head">Thank you.</h1>
                <section class="contact-form submitted" id="contact-form">
                    <p class="">I will get back to you shortly. In the mean time, enjoy some of my latest thoughts <a href="http://twitter.com/ctrunsthis" target="_blank">on twitter</a>, or perhaps something more substantial below.
                    </p>
                    
                    <ol class="previous-posts contact">
                    <?php while(rwar_latest_posts()): ?>
                        <li>
                           <div class="featured-image-mini scale-quick" style="background-image: url(<?php echo article_custom_field('featured-image-small', 'http://coletownsend.com/themes/skriva/img/feature-small.svg'); ?>);"></div>
                        <div class="deets left-slide-less"><h1><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h1>
                        </li>
                <?php endwhile; ?>
                    
        		</section>	

        </article>
     </section> 
    
</div>


<?php theme_include('footer'); ?>
  
<!--   jribbble -->
    <script src="/web/content/script/smoothScroll.js"></script>
    <script src="http://coletownsend.com/web/content/script/jquery-1.7.1.min.js"></script>
    <script src="http://coletownsend.com/web/content/script/jribbble.js"></script>
    <script src="http://www.coletownsend.com/themes/zleek-master/js/dribbble.js"></script>
