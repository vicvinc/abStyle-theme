<?php query_posts(array(
   'category_name' => 'event',
   'posts_per_page' => 4,
)); ?>
<section id="upcoming-events">
    <h2><?php wp_title(''); ?></h2>
    <div id="home-events">
        <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
            <article id="<?php the_ID(); ?>" class="event-card">
            <?php
                get_template_part( 'template/page/upcoming_event_card', get_post_format());
            ?>
            </article>
        <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No News'); ?></p>
        <?php endif; ?>
    </div>
</section>
