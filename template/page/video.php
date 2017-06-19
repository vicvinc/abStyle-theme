<?php query_posts(array(
   'category_name' => 'video'
)); ?>
<main>
  <section class="article-page">
    <h1><?php wp_title(''); ?></h1>
    <h2><?php the_content(); ?></h2>
    <div class="article-list">
      <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
        <article id="<?php the_ID(); ?>" class="list-post standard-post sticky">
          <a class="thumb-link"
              href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"
              title="<?php the_title(); ?>" rel="bookmark">
              <div class="cover-image" 
              style="background-image: url(<?php the_post_thumbnail_url();?>);">
              </div>
          </a>
          <div class="card">
            <a class="h-link"
                href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" 
                title="Launching <?php the_title(); ?>" rel="bookmark">
              <?php the_title( '<h2>', '</h2>' ); ?>
              <h3><?php the_excerpt(); ?></h3>
            </a>
            <div class="meta">
              <?php the_category(', ');?>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
      <?php else : ?>
          <p><?php __('No News'); ?></p>
      <?php endif; ?>
    </div>
  </section>
</main>