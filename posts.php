<div id="bump">
    <?php theme_include('header'); ?>
            <section class="article archive">
              <article class="wrap post">
                <?php if(has_posts()): ?>
                  <!-- We have posts, it's safe to loop. -->
                  <ol class="post-list">
                    <?php while(posts()): ?>
                      <li>
                        <h2><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>
                        <em><span class="date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></span></em>
                      </li>
                    <?php endwhile; ?>
                  </ol>
                <?php else: ?>
                  <p>I'm just going to come clean and admit that I'm unprepared.</p>
                <?php endif; ?>
              </article>
            </section>
        </div>

<?php theme_include('footer'); ?>