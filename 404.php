<?php theme_include('header'); ?>

 <section class="article">
  <img src="<?php echo theme_url('/img/loading.gif'); ?>" class="loading" alt="Loading...">
  <div class="overlay"></div>
  <div class="featured-image" style="background-image: url(http://coletownsend.com/public_html/anchor/themes/skriva/img/bg.svg); ?>);"></div>
  <article class="wrap post">
    <header class="post-header">
      <hgroup>
        <p class="category">Oops.</p>
        <h1>Four oh Four!</h1>
        <p class="lead">Unfortunately, the page <code>/<?php echo current_url(); ?></code> came up missing.</p>
      </hgroup>
    </header>
    <p>Head back to the <a href="<?php echo base_url(); ?>">home page</a> or take a peak at <a target="_blank" href="http://dribbble.com/ColeTownsend">what I've been doing.</a></p>
  </article>
</section>

<?php theme_include('footer'); ?>