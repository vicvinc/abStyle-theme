<!-- article card -->
<div class="card">
  <a class="h-link" href="<?php echo get_permalink(); ?>" title="Launching <?php the_title(); ?>" rel="bookmark">
    <?php the_title( '<h2>', '</h2>' ); ?>
    <h3><?php the_excerpt(); ?></h3>
  </a>
  <div class="meta">
    <?php the_category(', ');?>
  </div>
</div>