<div class="cover-image" style="background-image: url(<?php the_post_thumbnail_url();?>); "></div>
<div class="card">
  <?php the_title( '<h1>', '</h1>' ); ?>
  <h2><?php the_excerpt(); ?></h2>
  <div class="meta">
    <?php the_category(', '); ?>&mdash;<?php the_author(); ?>
  </div>
</div>
<div class="content">
  <div class="intro">
    <p>
    </p>
  </div>
  <?php the_content();?>
</div>
