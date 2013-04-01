<?php theme_include('header'); ?>
  <div id="bump">
<!-- If page is set to home, show latest post -->
<?php if(is_homepage()): ?>
  <?php if(has_posts()): ?>
    <?php posts(); ?>
  
        <section class="article">
          <img src="<?php echo theme_url('/img/loading.gif'); ?>" class="loading" alt="Loading...">
          <div class="overlay"></div>
          <div class="featured-image" style="background-image: url(<?php echo article_custom_field('featured-image', 'http://coletownsend.com/blog/themes/skriva/img/feature.svg'); ?>);"></div>
          <article class="wrap post">
            <header class="post-header">
              <hgroup>
                <h1><?php echo article_title(); ?></h1>
            <p class="date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date('F jS, Y', article_time()); ?></time></p>
                <p class="lead"><?php echo article_description(); ?></p>
              </hgroup>
            </header>
            <?php echo article_html(); ?>
            
                   <div class="btn-jacket"><a href="http://twitter.com/share?url=<?php echo full_url(); ?>&text=<?php echo article_title(); ?>&via=<?php echo twitter_account(); ?>" class="button">Share</a></div>
                   
          </article>
        </section>
    
      <?php else: ?>
        <section class="article archive">
          <article class="wrap post">
            <p>My dog ate my blog post.</p>
          </article>
        </section>
      <?php endif; ?>
    
    <?php else: ?>
    
        <section class="article">
          <img src="<?php echo theme_url('/img/loading.gif'); ?>" class="loading" alt="Loading...">
          <div class="overlay"></div>
          <div class="featured-image" style="background-image: url(<?php echo article_custom_field('featured-image', 'http://f.cl.ly/items/412Y3o2k1h2t3v3w0X0M/feature-img.svg'); ?>);"></div>
          <article class="wrap post">
             <header class="post-header">
              <hgroup>
                <h1><?php echo page_title(); ?></h1>
                <p class="date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date('F jS, Y', article_time()); ?></time></p>
                <p class="lead"><?php echo article_description(); ?></p>
              </hgroup>
            </header>
            <?php echo page_content(); ?>
          </article>
        </section>
    

<?php endif; ?>

		</div>

<?php theme_include('footer'); ?>