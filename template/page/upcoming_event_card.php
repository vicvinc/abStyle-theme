<!-- upcoming event card -->
<div class="card">
  <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"
    title="<?php the_title(); ?>" rel="bookmark">
    <div class="date">
      <?php the_time('n.d')?>
    </div>
  </a>
  <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="<?php the_title(); ?>"
    rel="bookmark">
    <div class="h-link">
      <?php the_title('<h3>', '</h3>'); ?>
      <h4><?php the_excerpt(); ?></h4>
    </div>
  </a>
</div>
<div class="meta">
  <?php the_category(', ');?>
</a>