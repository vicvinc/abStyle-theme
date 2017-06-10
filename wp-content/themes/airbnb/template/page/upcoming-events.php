<?php 
query_posts(array(
   'category_name' => 'event'
));
?>
<main>
<?php if ( have_posts() ) : ?>
    <section class="events-page">
      <h1><?php wp_title(''); ?></h1>
			<h2>Learn about our upcoming design talks, workshops, and immersive experiences</h2>
			<div class="event-list">
        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" class="first-event upcoming-event-card">
            <a class="thumb-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
              <div class="cover-image" style="background-image: url(<?php the_post_thumbnail_url();?>);"></div>
            </a>
            <div class="card">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
                <div class="first-day day">
                  <?php the_date('j'); ?>
                  <span>
                    <?php
                      get_the_date( 'M' );
                    ?>
                    </span>
                </div>
              </a>
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
                <div class="second-day day">
                  <?php the_date('m.d'); ?>
                </div>
              </a>
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
                <div class="h-link">
                  <h3><?php the_title(); ?> </h3>
                  <h4><?php the_excerpt(); ?></h4>
                </div>
              </a>
              <div class="meta">
                <?php  the_category(', ');?> 
              </div>
            </div>
          </article>
        <?php endwhile; ?>
        <!-- end of the loop -->
			</div>
		</section>
	<?php wp_reset_postdata(); ?>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>