<section class="container infinite-post-container">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="<?php the_ID(); ?>" class="list-post standard-post ">
            <a class="thumb-link" 
                href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"
                title="<?php the_title(); ?>"
                rel="bookmark">
                <div class="cover-image" style="background-image: url(<?php the_post_thumbnail_url();?>);"></div>
            </a>
            <div class="card">
                <a class="h-link" 
                    href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"
                    title="<?php the_title(); ?>" 
                    rel="bookmark">
                    <h2><?php the_title(); ?></h2>
                    <h3><?php the_excerpt(); ?></h3>
                </a>
                <div class="meta">
                    <?php  the_category(', ');?>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</section>
<div class="container">
    <a class="btn-infinite infinite-load-more" 
        data-page="1"
        data-posttypes="post,videos,collections" 
        data-term="" 
        data-total="12" 
        data-url="<?php echo admin_url('admin-ajax.php') ?>">
            More
    </a>
    <div id="spinner">
        <div id="spriteContainer"></div>
    </div>
</div>