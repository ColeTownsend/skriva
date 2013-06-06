<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

    <meta name="description" content="<?php echo site_description(); ?>">

    <link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
    <link rel="stylesheet" href="http://coletownsend.com/web/content/blog-font/sans/sans.css" media="all" />
    <link rel="stylesheet" href="http://coletownsend.com/web/content/blog-font/grot/grots.css" media="all" />
    <link rel="stylesheet" href="http://coletownsend.com/web/content/fonts/Entypo/Entypo-Mini/style.css" media="all">
    
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
    
    <link rel="shortcut icon" href="http://coletownsend.com/favicon.ico">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>var base = '<?php echo theme_url(); ?>';</script>

    <meta name="viewport" content="width=device-width">
    <meta name="generator" content="Anchor CMS">

    <meta property="og:title" content="<?php echo site_name(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo current_url(); ?>">
    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo site_description(); ?>">



    <?php if(customised()): ?>
      <!-- Custom CSS -->
      <style><?php echo article_css(); ?></style>
      <!--  Custom Javascript -->
      <script><?php echo article_js(); ?></script>
    <?php endif; ?>
  </head>
  
  <div id="bump">
  
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