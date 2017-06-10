
<?php
get_header();
?>
<div id="infoPage">
    <div class="blog-wraper">
    <?php if (have_posts()): while (have_posts()): the_post();?>
						    <div class="container">
						        <h2 class="info-title"><?php the_title();?></h2>
						        <div class="info-data"><span><?php the_time('Y年m月j日')?></span></div>
						        <div class="info-content">
						            <?php the_content(__('(more...)'));?>
						        </div>
						    </div>
						    <?php endwhile;endif;?>
    </div>
</div>





