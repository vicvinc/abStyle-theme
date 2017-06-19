<?php
get_header(); ?>
    <main>
        <?php get_template_part( 'template/page/category', get_post_format());?>
    </main>
<?php
get_footer();