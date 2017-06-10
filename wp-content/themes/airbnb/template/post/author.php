<div class="authors">
  <div class="author">
    <div class="author-photo" style="background-image: url(<?php echo get_avatar_url(get_the_author_meta('ID'))?>);"></div>
    <div class="author-bio">
      <?php echo nl2br(get_the_author_meta('description')); ?>
    </div>
  </div>
</div>