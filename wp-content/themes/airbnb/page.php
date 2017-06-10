<?php
/*
	Template Name: default-page
*/
get_header(); ?>
	<main id="main" class="site-main" role="main">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template/content', 'page' );
		endwhile;
		?>]
	</main>
<?php
get_footer();
