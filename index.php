<?php
get_header();
?>
    <main>
        <?php
            get_template_part( 'template/post/recent-post', get_post_format());
            get_template_part( 'template/post/upcoming-events', get_post_format());
            get_template_part( 'template/post/infinate-post', get_post_format());
            get_template_part( 'template/auth/sign-up', get_post_format());
        ?>
    </main>
<?php
get_footer();
