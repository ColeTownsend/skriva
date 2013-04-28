<div id="bump">
<?php theme_include('header'); ?>
    <section class="article" id="article-<?php echo article_id(); ?>">
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
    
        <?php echo article_markdown(); ?>
    
      </article>
    </section>
</div>

<script src="http://coletownsend.com/web/content/script/unslider.min.js"></script>
<script src="http://unslider.com/unslider.min.js"></script>
<script>
    $(function() {
    $('.banner').unslider();
});			
</script>


<?php theme_include('footer'); ?>