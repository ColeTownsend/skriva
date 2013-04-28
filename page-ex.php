 <div id="bump">
<?php theme_include('header'); ?>
<!-- If page is set to home, show latest post -->
    
		<section class="article">
			 <article class="wrap post">
            <header class="post-header">
              <hgroup>
                <h1><?php echo page_title(); ?></h1>
                <p class="lead"><?php echo page_description(); ?></p>
              </hgroup>
            </header>
            <?php echo page_content(); ?>
            
                   <div class="btn-jacket"><a href="http://twitter.com/share?url=<?php echo full_url(); ?>&text=<?php echo article_title(); ?>&via=<?php echo twitter_account(); ?>" class="button">Share</a></div>
                   
          </article>
		</section>    

		</div>

<?php theme_include('footer'); ?>