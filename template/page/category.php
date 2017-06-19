<?php
  query_posts( array(
    'category_name' => single_cat_title()
  ));
?>

<main>
  <h1><?php single_cat_title(); ?></h1>
  <section class="container infinite-post-container">
    <?php while(have_posts()):the_post(); ?>
      <article id="post-<?php the_ID(); ?>" class="list-post standard-post ">
        <?php
          get_template_part( 'template/page/common_cover', get_post_format());
          get_template_part( 'template/page/common_card', get_post_format());
        ?>
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
  <?php 
    get_template_part( 'template/auth/sign-up', get_post_format());
  ?>
</main>