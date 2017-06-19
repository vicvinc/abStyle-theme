<?php
	get_header();
	while (have_posts()):
	the_post();
?>
<main>
	<section role="main" id="content" class="post-post">
		<article id="post-<?php the_ID(); ?>" class="full-post standard-post">
			<?php get_template_part( 'template/post/content', get_post_format()); ?>
			<?php get_template_part( 'template/post/up-next', get_post_format()); ?>
			<?php get_template_part( 'template/post/author', get_post_format()); ?>
		</article>
	</section>
</main>
<?php
	endwhile;
get_footer();
