<?php
/**
 * Enqueue scripts and styles.
 */
function _scripts() {
	wp_enqueue_style('mainstyle', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_script( '_dev', get_template_directory_uri() . '/js/airbnb.js', array('jquery', 'underscore'), '20170523',	true);
}
add_action( 'wp_enqueue_scripts', '_scripts' );

/*-----------------------------------------ajax load posts--------------------------------------*/ 
/*
	@author: maxm
	@desc: ajax infinate loader handler
	@date: 2016-12-5
	@todo: 自定到文件
	@args：从请求中获取
	@reutrn： 以html格式返回获取的post信息
*/
function infinite_load_more(){
	if ( isset($_REQUEST) ) {
		
	}

	$page = (isset($_POST['page'])) ? $_POST['page'] : 1; //当前分页
	$cate = (isset($_POST['postTypes'])) ? $_POST['postTypes'] : 'article';

	header('Content-Type: text/html');

	$args = array(
		// 'suppress_filters' => true,
		'category_name'  => explode(',', $cate),
		'posts_per_page' => 6, //每页6篇博客
		// 'offset' => 1,
		'post_status' => 'publish',
		'orderby' => 'date',
		'order' => 'DESC',
		'paged' => $page
	);
	
	$query = new WP_Query($args);

	$posts = $query->get_posts();

	if ($query->have_posts()){
				while ($query->have_posts()) { 
					$query->the_post();
			?>
			<article id="<?php the_ID(); ?>" class="list-post standard-post ">
					<a class="thumb-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="<?php the_title(); ?>" rel="bookmark">
							<div class="cover-image" style="background-image: url(<?php the_post_thumbnail_url();?>);"></div>
					</a>
					<div class="card">
							<a class="h-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="<?php the_title(); ?>" rel="bookmark">
									<h2><?php the_title(); ?></h2>
									<h3> Airbnb Design — Talk featuring Kiran Gandhi. </h3>
							</a>
							<div class="meta">
									<a href="category/events/index.html" rel="category tag">Events</a> </div>
					</div>
			</article>
			<?php
				}
	} else {
		echo 0;
	}
	wp_reset_postdata();
	exit;
}
add_action('wp_ajax_nopriv_infinite_load_more', 'infinite_load_more');
add_action('wp_ajax_infinite_load_more', 'infinite_load_more');

// get image url
function img_base_url() {
	return get_template_directory_uri() . '\/img\/';
}

// search scripts
$settings = array(
    'attributesToIndex' => array(
        'unordered(post_title)',
        'unordered(content)',
    ),
    'customRanking' => array(
        'desc(is_sticky)',
        'desc(post_date)',
    ),
    'attributeForDistinct'  => 'post_id',
    'distinct'              => true,
    'attributesForFaceting' => array(
        'taxonomy_post_tag',
        'taxonomy_category',
        'post_author.display_name',
    ),
    'attributesToSnippet' => array(
        'post_title:30',
        'content:30',
    ),
    'snippetEllipsisText' => '…',
);
function custom_posts_index_settings( array $settings ) {
    $custom_ranking = $settings['customRanking'];
    array_unshift( $custom_ranking, 'desc(visits_count)' );
    $settings['customRanking'] = $custom_ranking;
    return $settings;
}
add_filter( 'algolia_posts_index_settings', 'custom_posts_index_settings' );