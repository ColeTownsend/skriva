<?php theme_include('header'); ?>
    <section class="article" id="article-<?php echo article_id(); ?>">
      <img src="<?php echo theme_url('/img/loading.gif'); ?>" class="loading" alt="Loading...">
      <div class="overlay"></div>
      <div class="featured-image" style="background-image: url(<?php echo article_custom_field('featured-image', 'http://coletownsend.com/themes/skriva/img/feature.svg'); ?>);"></div>
      <article class="wrap post">
        <header class="post-header">
          <hgroup>
            <h1><?php echo article_title(); ?></h1>
            <p class="date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date('F jS, Y', article_time()); ?></time></p>
            <p class="lead"><?php echo article_description(); ?></p>
          </hgroup>
        </header>
    
        <?php echo article_markdown(); ?>
          
        <div class="btn-jacket"><a href="http://twitter.com/share?url=<?php echo full_url(); ?>&text=<?php echo article_title(); ?>&via=<?php echo twitter_account(); ?>" class="button">Share</a></div>
    
      </article>
    </section>
</div>
<?php theme_include('footer'); ?>