<?php

  $allowCat = array(4);

  function article_category_id() {
    if($category = Registry::prop('article', 'category')) {
      $categories = Registry::get('all_categories');
      return $categories[$category]->id;
    }
  }
    
    function portf_list() {
      // only run on the first call
      if( ! Registry::has('rwar_post_archive')) {
        // capture original article if one is set
        if($article = Registry::get('article')) {
          Registry::set('original_article', $article);
        }
      }
    
      if( ! $posts = Registry::get('rwar_post_archive')) {
        $posts = Post::where('status', '=', 'published')->sort('created', 'desc')->get();
    
        Registry::set('rwar_post_archive', $posts = new Items($posts));
      }
    
      if($result = $posts->valid()) {
        // register single post
        Registry::set('article', $posts->current());
    
        // move to next
        $posts->next();
      }
      else {
        // back to the start
        $posts->rewind();
    
        // reset original article
        Registry::set('article', Registry::get('original_article'));
    
        // remove items
        Registry::set('rwar_post_archive', false);
      }
    
      return $result;
    }

?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
                 <a class="button hire-me" id="hire-me" href="mailto:cole@coletownsend.com?subject=Inquiry">WORK WITH ME</a>
             </aside>
             <aside class="code g2 hovering">
                <img class="window" src="/themes/zleek-master/img/code.svg" alt="" />
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
            <h1 class="sl-head">Recent Work</h1>
              <article class="case-wrap">
                    <ol class="case-list" id="case-list">
                    <?php while(portf_list()): ?>
                        <?php foreach($allowCat as $cat): ?>
                            <?php if(article_category_id() == $cat): ?>
                              <li>
                                <a href="<?php echo article_url(); ?>">
                                    <h1 class="case-title"><?php echo article_title(); ?></h1>
                                    <div class="case-img" style="background-image: url(<?php echo article_custom_field('featured-image-small', 'http://coletownsend.com/blog/themes/skriva/img/feature-small.svg'); ?>);"></div>
                                <div class="case-deets"><h1 class=""><?php echo article_title(); ?></h1>
                                <p class=""><?php echo article_description(); ?></p></div>
                                </a>
                              </li>
                              <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endwhile; ?>
                    </ol>
              </article>
        </article>
     </section>     
</div>

<?php theme_include('footer'); ?>
  
      <script src="/web/content/script/smoothScroll.js"></script>

  
<!--   jribbble -->
    <script src="http://coletownsend.com/web/content/script/jquery-1.7.1.min.js"></script>    
<!--     Validation -->

    

  </body>
</html>