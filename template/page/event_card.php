<!-- event crad -->
<div class="card">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
    <div class="first-day day">
      <?php the_time('j'); ?>
      <span>
        <?php the_time('M'); ?>
      </span>
    </div>
  </a>
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
    <div class="second-day day">
      <?php the_date('j.M'); ?>
    </div>
  </a>
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
    <div class="h-link">
      <h3><?php the_title(); ?> </h3>
      <h4><?php the_excerpt(); ?></h4>
    </div>
  </a>
  <div class="meta">
    <?php  the_category(', ');?> 
  </div>
</div>