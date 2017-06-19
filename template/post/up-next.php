<!-- fake recommend particals -->
<?php
  $pid = get_the_ID();
  $p = new WP_Query(array(
    'post__not_in' => array($pid),
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'post_type' => 'post',
    'orderby' => 'title',
    'order' => 'rand'
  ));
?>
<h4 id="next-text">Up Next</h4>
<div class="up-next">
<?php
  if($p->have_posts()):
    while($p->have_posts()):
      $p->the_post();
?>
    <article id="post-<?php the_ID();?>" class="next-post">
      <?php get_template_part( 'template/page/common_cover', get_post_format()); ?>
      <?php get_template_part( 'template/page/common_card', get_post_format()); ?>
    </article>
<?php
    endwhile;
  endif;
?>
</div>
