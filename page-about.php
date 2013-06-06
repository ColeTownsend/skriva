<script src="http://coletownsend.com/web/content/plugins/chartwell.min.js"></script>
<script src="http://coletownsend.com/web/content/plugins/chartwell_lines.min.js"></script>
<script src="http://www.chartjs.org/docs/Chart.js"></script>
<script>
	$(document).ready(function() {
		FFChartwell()
	})
</script>
<div id="bump">
<?php theme_include('header'); ?>
    <section class="article" id="article-<?php echo article_id(); ?>">
      <img src="<?php echo theme_url('/img/loading.gif'); ?>" class="loading" alt="Loading...">
      <div class="overlay"></div>
      <div class="featured-image" style="background-image: url(<?php echo article_custom_field('featured-image', 'http://coletownsend.com/themes/skriva/img/feature.svg'); ?>);"></div>
      <article class="wrap post">        
        
        <article class="data-blocks">
            <div class="g3 miles-this-month">
            </div>
            <div class="g3 miles-this-month">
                <span class="chartwell barsvertical">
                    <span>14</span>
                    <span>7.5</span>
                    <span>13.5</span>
                    
                </span>
            </div>
        </article>
    
      </article>
    </section>
</div>
<?php theme_include('footer'); ?>