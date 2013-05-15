<div id="bump">
<?php theme_include('header'); ?>
    <section class="article">
      <div class="overlay"></div>
      <div class="featured-image payment" style="background-image: url(<?php echo page_custom_field('featured-page-image', 'http://coletownsend.com/blog/themes/skriva/img/feature.svg'); ?>);"></div>
          <article class="wrap post">
            <header class="post-header">
              <hgroup>
                <h1><?php echo page_title(); ?></h1>
              </hgroup>
            </header>
            
            <?php echo page_content(); ?>
            
        </article>
    </section>
</div>

