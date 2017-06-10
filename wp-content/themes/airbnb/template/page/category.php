<?php query_posts( array(
   'category_name' => single_cat_title()
)); ?>
<main>
  <h1><?php single_cat_title(); ?></h1>
  <section class="container infinite-post-container">
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-5171" class="list-post standard-post ">
        <a class="thumb-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"
          title="<?php the_title();?>" rel="bookmark">
          <div class="cover-image" style="background-image: url(<?php the_post_thumbnail_url();?>);"></div>
        </a>
        <div class="card">
          <a class="h-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"
            title="<?php the_title();?>" rel="bookmark">
            <?php the_title('<h2>', '</h2>');?>
            <h3><?php the_excerpt(); ?></h3>
          </a>
          <div class="meta">
            <?php  the_category(', ');?>
          </div>
        </div>
      </article>
    <?php endwhile; ?>
  </section>
  <div class="container">
      <a class="btn-infinite infinite-load-more"
      data-page="1"
      data-posttypes="post,collections"
      data-term="<?php single_cat_title()?>" data-total="2"
      data-url="<?php echo admin_url('admin-ajax.php') ?>">More</a>
      <div id="spinner">
        <div id="spriteContainer"></div>
      </div>
  </div>

  <div id="signupBlock" class="mc_embed_signup">
  </div>
</main>