<?php
/*
	Template Name: page-with-posts
*/
get_header();
?>
<main>
  <section class="article-page">
		<?php
			$category = 'not-exists-category'; // default
			if(have_posts()): 
				while(have_posts()):
					the_post(); 
					the_title('<h1>', '</h1>');
					the_content();
					$category = get_post_meta(get_the_ID(), 'show_post_category', true);
				endwhile;
			endif;
			$category = !$category ? 'not-exists-category' : $category;
			query_posts(array('category_name' => $category));
		?>
    <div class="article-list">
      <?php 
				if(have_posts()):
					while(have_posts()):
						the_post();?>
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
				<section class="error">
					<img src="<?php echo img_base_url() . '404-anim.gif'; ?>" alt="404">
					<h2>Oops!</h2>
					<h3>指定的文章类别不存在</h3>
					<h6>Error Code: 404</h6>
				</section>
      <?php endif; ?>
    </div>
  </section>
	<?php
		get_template_part( 'template/auth/sign-up', get_post_format());
	?>
</main>
<?php
	get_footer();
