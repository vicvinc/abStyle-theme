<?php query_posts( array(
   'category_name' => 'article',
   'posts_per_page' => 3,
)); ?>
<!--show recent 3 article-->
<section class="recent-post">
    <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
        <article id="<?php the_ID(); ?>" class="list-post standard-post sticky">
        <?php
          get_template_part( 'template/page/common_cover', get_post_format());
          get_template_part( 'template/page/common_card', get_post_format());
        ?>
        </article>
    <?php endwhile; ?>
    <?php else : ?>
        <p><?php __('No News'); ?></p>
    <?php endif; ?>
</section>