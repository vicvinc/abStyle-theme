<?php
  global $post;
  $current_post = $post; // remember the current post
?>
<h4 id="next-text">Up Next</h4>
<div class="up-next">
<?php
  for($i = 1; $i <= 3; $i++){
    $post = get_previous_post(); // this uses $post->ID
    setup_postdata($post);
?>
<article id="post-<?php the_ID();?>" class="next-post">
  <a class="thumb-link" 
    href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"
    title="<?php the_title();?>" rel="bookmark">
    <div class="cover-image" style="background-image: url(<?php the_post_thumbnail_url();?>);"></div>
  </a>
  <div class="card">
    <a class="h-link"
      href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"
      title="<?php the_title();?>" rel="bookmark">
      <h2><?php the_title();?></h2>
      <h3><?php the_excerpt(); ?></h3>
    </a>
    <div class="meta">
      <?php  the_category(', ');?>
    </div>
  </div>
</article>
<?php
  }
  $post = $current_post; // restore
?>
</div>
    
