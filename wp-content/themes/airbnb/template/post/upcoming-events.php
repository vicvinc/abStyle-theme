<?php query_posts(array(
   'category_name' => 'event',
   'posts_per_page' => 4,
)); ?>
<section id="upcoming-events">
    <h2><?php wp_title(''); ?></h2>
    <div id="home-events">
        <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
            <article id="<?php the_ID(); ?>" class="event-card">
                <div class="card">
                    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"
                        title="<?php the_title(); ?>" rel="bookmark">
                        <div class="date">
                            <?php the_time('n.d')?>
                        </div>
                    </a>
                    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="<?php the_title(); ?>"
                        rel="bookmark">
                        <div class="h-link">
                            <?php the_title('<h3>', '</h3>'); ?>
                            <h4><?php the_excerpt(); ?></h4>
                        </div>
                    </a>
                </div>
                <div class="meta">
                    <?php the_category(', ');?>
                </a>
            </article>
        <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No News'); ?></p>
        <?php endif; ?>
    </div>
</section>
