<?php theme_include('header'); ?>
    <div id='bump'>
        <section class="article archive">
          <article class="archive-wrap">
            <?php if(has_posts()): ?>
              <!-- We have posts, it's safe to loop. -->
              <h1></h1>
              <ol data-liffect="slideLeft" class="post-list" id="post-list">
                 <lh style="text-align: center;"><h1><span class="bb">Recent Entries</span></h1></lh>
                <?php while(posts()): ?>
                  <li>
                    <div class="featured-image-small" style="background-image: url(<?php echo article_custom_field('featured-image-small', 'http://coletownsend.com/blog/themes/skriva/img/feature-small.svg'); ?>);"></div>
                    <div class="deets left-slide"><h1><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h1>
                    <em><p class="date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></p></em></div>
                    
                  </li>
                <?php endwhile; ?>
              </ol>
            <?php else: ?>
              <p class="unprepped">Looks like there is nothing here. Huh!</p>
            <?php endif; ?>
          </article>
        </section>
    </div>
<?php theme_include('footer'); ?>