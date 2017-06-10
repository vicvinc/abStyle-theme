<!-- 主页内容 -->
<div class="aboutus">
    <div class="mask"></div> 
    <div class="container">
    <?php 
		while ( have_posts() ) : the_post();
	?>
        <h2 class="title"><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    <?php endwhile;?>
    </div>
</div>
<!-- 主页内容end -->