

<?php
    /*
        @author: maxm
        @desc: 博客预加载18篇，3页
        @date： 2016-12-06
        @todo:

        @query: wp_query
        @return: [posts...]
    */ 
    $args = array(
        'category_name'  => 'news',
        'posts_per_page' => 18, //3*6
        // 'offset' => 6,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => (( get_query_var('page') ) ? get_query_var('page') : 0) //分页数从0开始，不是从1
    );
    
    $posts = new WP_Query($args);

    $blogs = $posts->get_posts();

    wp_reset_postdata();

    $pages = array(
        'page1' => array_slice($blogs, 0, 6),
        'page2' => array_slice($blogs, 6, 6),
        'page3' => array_slice($blogs, 12, 6)
    );

    if ($posts->have_posts()) {
?>
<!-- 动态信息 -->

<div class="sections swiper-slide">
	<div class="blog-carousel swiper-container">
		<div class="blog-carousel-wrapper swiper-wrapper">
            <?php
            foreach ($pages as $page) {
                if(count($page) > 0) {
            ?>
            <div class="swiper-slide">
                <ul class="blog-list">
                <?php
                    foreach ($page as $index => $post) {
                        if ($index%2 == 0) {
                            $itemClass = 'blog-item blog-even';
                        } else {
                            $itemClass = 'blog-item blog-odd';
                        }
                ?>
                    <li class="<?php echo $itemClass;?>" 
                        data-post-id="<?php echo the_ID(); ?>">
                        <div class="article">
                            <p class="date h6"><?php the_time('Y年m月j日')?></p>
                            <i class="separate"></i>
                            <p class="detail h6"><?php the_title();?></p>
                            <p class="detail h6 post-intro"><?php echo wp_first_paragraph_excerpt();?></p>
                        </div>
                        <div class="bg-mask"></div>
                        <div class="bg-img" 
                            style="background:url(<?php echo the_post_thumbnail_url();?>) center / cover no-repeat">
                        </div>
                    </li>
                <?php
                    }
                ?>
                </ul>
            </div>
            <?php 
                }
            }
            ?>
        </div>
        <div class="btn-prev btn-pagenation" data-page-label="prev"></div>
        <div class="btn-next btn-pagenation" data-page-label="next"></div>
	</div>
    <div class="blog-modal">
        <div class="modal-wrap">
            <div class="modal-content" id="blog-show"></div>
            <div class="close-btn">
                <i class="i-close"></i>
            </div>
        </div>
    </div>
</div>
<!-- 动态信息end -->

<?php
    }
?>