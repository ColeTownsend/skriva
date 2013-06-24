<div id="bump">
<?php theme_include('header'); ?>
    
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

<script type="text/javascript">
	$(document).ready(function(){
		freezeframe = new FreezeFrame();
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

    <section class="portf sl1">
        <article class="wrap">
            <aside class="center-me">
             <img class="avatar" src="/themes/zleek-master/img/me%20copy.jpg" alt="Cole Townsend, it's a pleasure." />
             <div class="intro">
                 <p><h1 class="fitt">Hello, I'm Cole.</h1></p>
                 <p><h2 class="fitt2">I'm a web and visual designer.</h2></p>
             </div>
             </aside>
             <a class="arrow" id="arrow" href="#sl2"><i class="icon-arrow-down"></i></a>
        </article>
    </section> 
    <div id="tripwire"></div>
     <section class="portf sl2" id="sl2">
        <article class="wrap-alt">
             <aside class="cta g2">
                 <h1 class="sl-head">I Create The Web</h1>
                 <a class="button hire-me" id="hire-me" href="#sl5">WORK WITH ME</a>
             </aside>
             <aside class="code g2">
                <img class="window" src="http://f.cl.ly/items/2w0Q3N2o2Z1g3q0q1z3p/code.svg" alt="" />
             </aside>
        </article>
    </section> 
<div id="tripwire-2"></div>    
     <section class="portf sl3">
        <article class="wrap-alt">
            <h1 class="sl-head">Project Process</h1> 
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
    
    <section class="portf sl4">
        <article class="wrap-alt">
            <h1 class="sl-head">Latest Doodles</h1>
           	<div class="work" id="work">
			
			         <p></p>
			<!-- Booyah Jribbble -->	
			
						
			</div> <! -- End WORK -->
        </article>
     </section> 

     <section class="portf" id="sl5">
        <div id="tripwire3" class="tripwire3"></div>
        <article class="wrap-alt">
             <h1 class="sl-head">Let's Work Together</h1>
                <section class="contact-form" id="contact-form">
                     <form style="display: block;" action="contactengine.php" method="POST" enctype="multipart/form-data">
                    	
                    	<br />
                    	
                    	<div class="form-block">
                    	   <input name="Name" type="Text" id="Name" required="required" placeholder="Name" required>
                    	</div>
                    	
                    	<br />
                    	
                    	<div class="form-block">
                    	   <input name="Email" type="Email" id="Email" required="required"  placeholder="Email" required>
                    	</div>
                    	
                    	<br />
                    	
                    	<textarea name="Message" rows="6"  required="required" placeholder="Share your thoughts." id="Message" required></textarea>
                    	
                    	<br />
                    	
                    	<input name="Submit" type="Submit" value="SUBMIT" />
                    </form>
                    
                    <a class="mailer" href="mailto:cole@coletownsend.com?subject=Inquiry">EMAIL</a>
                    
        		</section>


        </article>
     </section> 
    
</div>

<?php theme_include('footer'); ?>
  
      <script src="/web/content/script/smoothScroll.js"></script>

  
<!--   jribbble -->
    <script src="http://coletownsend.com/web/content/script/jquery-1.7.1.min.js"></script>
    <script src="http://coletownsend.com/web/content/script/jribbble.js"></script>
    <script src="http://www.coletownsend.com/themes/zleek-master/js/dribbble.js"></script>
    
<!--     Validation -->

    

  </body>
</html>