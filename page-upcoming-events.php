<?php
/*
	Template Name: up-coming-events
*/
get_header();
?>
<main>
  <?php if ( have_posts() ) : ?>
		<section class="events-page">
		<!-- echo page content -->
		<?php 
			while ( have_posts() ) : the_post();
				the_title('<h1>', '</h1>');
				the_content();
			endwhile;
		?>
		<!-- query posts of category event -->
		<?php 
			query_posts(array(
				'category_name' => 'event'
			));
		?>
		<!-- post list -->
			<div class="event-list">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" class="first-event upcoming-event-card">
						<?php get_template_part( 'template/page/common_cover', get_post_format()); ?>
						<?php get_template_part( 'template/page/event_card', get_post_format()); ?>
					</article>
				<?php endwhile; ?>
			</div>
		</section>
    <?php wp_reset_postdata(); ?>
  <?php else: ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php
		endif; 
		get_template_part( 'template/auth/sign-up', get_post_format());
	?>
	
</main>
<?php
	get_footer();