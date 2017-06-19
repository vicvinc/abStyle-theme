<?php
/*
	Template Name: videos
*/
get_header();
?>
<main>
  <section class="article-page">
		<?php
			if(have_posts()): 
				while(have_posts()):
					the_post(); 
					the_title('<h1>', '</h1>');
					the_content();
				endwhile;
			endif;
			query_posts(array(
				'category_name' => 'video'
			));
		?>
    <div class="article-list">
      <?php if(have_posts()):while(have_posts()):the_post();?>
        <article id="<?php the_ID();?>" class="list-post standard-post sticky">
					<?php
						get_template_part( 'template/page/common_cover', get_post_format());
						get_template_part( 'template/page/common_card', get_post_format());
					?>
        </article>
      <?php
			endwhile;
      else:
			?>
        <p><?php __('No News'); ?></p>
      <?php endif; ?>
    </div>
  </section>
	<?php
		get_template_part( 'template/auth/sign-up', get_post_format());
	?>
</main>
<?php
	get_footer();
