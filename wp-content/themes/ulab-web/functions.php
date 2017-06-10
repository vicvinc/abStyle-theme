<?php
/*
	@author: maxm
	@desc: 封面支持功能
	@date: 2016-12-15
	@todo: null

	@config
*/ 
add_theme_support( 'post-thumbnails' );
/*
	@author: maxm
	@desc: 静态文件获取基本目录
	@date: 2016-12-5
	@todo: 更新为更合理的文件目录

	@conts variables
*/
$baseUri = get_template_directory_uri();
$jsPath = $baseUri . '/public/js/';
/*
	@author: maxm
	@desc: 去掉google font 加载(影响页面加载速度)
	@date: 2016-12-01

	@todo: add
	@args: null
	@return: null
*/
function remove_open_sans() {
	wp_deregister_style( 'open-sans' );
	wp_register_style( 'open-sans', false );
	wp_enqueue_style('open-sans','');
}
add_action( 'init', 'remove_open_sans' );
// 其他消息去除
remove_action( 'wp_footer', 'wp_print_footer_scripts' );
function ashuwp_clean_theme_meta(){
  remove_action( 'wp_head', 'print_emoji_detection_script', 7, 1);
  remove_action( 'wp_print_styles', 'print_emoji_styles', 10, 1);
  remove_action( 'wp_head', 'rsd_link', 10, 1);
  remove_action( 'wp_head', 'wp_generator', 10, 1);
  remove_action( 'wp_head', 'feed_links', 2, 1);
  remove_action( 'wp_head', 'feed_links_extra', 3, 1);
  remove_action( 'wp_head', 'index_rel_link', 10, 1);
  remove_action( 'wp_head', 'wlwmanifest_link', 10, 1);
  remove_action( 'wp_head', 'start_post_rel_link', 10, 1);
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0);
  remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0);
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0);
  remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0);
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10, 1);
  remove_action( 'wp_head', 'rel_canonical', 10, 0);
}
add_action( 'after_setup_theme', 'ashuwp_clean_theme_meta' ); //清除wp_head带入的meta标签
function ashuwp_deregister_embed_script(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'ashuwp_deregister_embed_script' ); //清除wp_footer带入的embed.min.js
/*
	@author: maxm
	@desc: 移除头部js文件加载，在footer部分加载js
	@date: 2016-12-05
	@todo: null

	@args: null
	@return: null
*/
remove_action('wp_head', 'wp_enqueue_scripts', 1);
add_action('wp_footer', 'wp_enqueue_scripts', 5);

/*
*   @author: maxm
	@desc: 获取博客中第一章图片，供轮播图片使用
	@date: 2016-11-28

	@todo: null
	@args: $post: blog post
	@return: the firtst img url in blog
*/
function get_first_img($post) {
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	return $first_img;
}
/*
	@author: maxm
	@date: 2016-11-28
	@desc: 修改最大上传文件限制, 上传视频使用,须修改Php.ini中相关配置使其大于下列值

	@todo: 
	@conts variables
*/ 
@ini_set( 'upload_max_size' , '300M' );
@ini_set( 'post_max_size', '300M');
@ini_set( 'max_execution_time', '300' );


/*
	@author: tangyuan
	@date: 2016-11-29
	@desc: 文章获取发表时间
*/
if ( ! function_exists( 'blog_posted_on' ) ) :

function blog_posted_on() {
	printf( __( ' %2$s ', 'blog' ), '',
		sprintf( '<span class="blog-date">%3$s</span>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		)
	);
}
endif;
/*-----------------------------------------ajax 分页加载模块----------------------------------------------------------*/ 
/*
	@author: maxm
	@desc: ajax加载分页post
	@date: 2016-12-5
	@todo: ajax url 自定义

	@args: null
	@return: null
*/
// 分页加载js文件
wp_register_script( 'ajax-load-page', $jsPath . 'ajax-page.js' );

// 替换js文件中的请求url
$translation_array = array(
	'url' => admin_url('admin-ajax.php'),
	'noposts' => __('No older posts found', 'ulab-web'),
);

// 本地替换
wp_localize_script( 'ajax-load-page', 'ajax_url', $translation_array );

// 加载js文件
// if(!is_home()) {
	wp_enqueue_script( 'ajax-load-page' );
// }

/* 分页加载ajax end */ 

/*
	@author: maxm
	@desc: ajax加载分页post的处理handler
	@date: 2016-12-5
	@todo: 自定到文件

	@args：从请求中获取
	@reutrn： 以html格式返回获取的post信息
*/
function more_page_ajax(){

	$paged = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0; //当前分页

	header('Content-Type: text/html');

	$args = array(
		// 'suppress_filters' => true,
		'category_name'  => 'news',
		'posts_per_page' => 6, //每页6篇博客
		// 'offset' => 1,
		'post_status' => 'publish',
		'orderby' => 'date',
		'order' => 'DESC',
		'paged' => $paged //分页数从0开始，不是从1
	);
	
	$query = new WP_Query($args);

	$posts = $query->get_posts();
	// echo urldecode(json_encode($posts->get_posts()));
	if ($query->have_posts()){
	?>
		<div class="swiper-slide">
			<ul class="blog-list">
			<?php
				while ($query->have_posts()) { 
					$query->the_post();
			?>
				<li class="blog-item" 
                    data-post-id="<?php echo the_ID(); ?>">
                    <div class="bg-mask"></div>
                    <div class="article">
                        <p class="date h6"><?php the_time('Y年m月j日')?></p>
                        <i class="separate"></i>
                        <p class="detail h6"><?php the_title();?></p>
                        <p class="detail h6 post-intro"><?php echo wp_first_paragraph_excerpt();?></p>
                    </div>
                    <div class="bg-img" data-src="<?php echo the_post_thumbnail_url();?>"></div>
                </li>
			<?php
				}
			?>
			</ul>
		</div>
	<?php
	} else {
		echo '';
	}
	wp_reset_postdata();
	exit;
}

// guest用户执行函数
add_action('wp_ajax_nopriv_more_page_ajax', 'more_page_ajax');
// 登录用户执行函数
add_action('wp_ajax_more_page_ajax', 'more_page_ajax');

/* 分页ajax加载end */ 
/*-----------------------------------------ajax 分页加载模块 end----------------------------------------------------------*/ 


/*-----------------------------------------ajax 单篇加载模块----------------------------------------------------------*/ 
/*
	@author: maxm
	@desc: 点击博客内容跳转到指定文章
	@date: 2016-12-06
	@todo: null

	@args: post_id
	@return: render_post_page
*/
// ajax js
wp_register_script( 'ajax-load-post', $jsPath . 'ajax-post.js' );

// 替换js文件中的请求url
$translation_array = array(
	'url' => admin_url('admin-ajax.php'),
	'noposts' => __('No older posts found', 'ulab-h5'),
);

// 本地替换
wp_localize_script( 'ajax-load-post', 'ajax_url', $translation_array );

// 加载js文件
// if(is_home()) {
	wp_enqueue_script( 'ajax-load-post' );
// }

/* 分页加载ajax end */ 

/*
	@author: maxm
	@desc: ajax加载分页post的处理handler
	@date: 2016-12-5
	@todo: 自定到文件

	@args：从请求中获取
	@reutrn： 以json格式返回获取的post信息
*/
function load_post_ajax(){

	$post_ID = (isset($_POST['postId'])) ? $_POST['postId'] : 1; //当前分页

	header('Content-Type: text/html');

	$args = array(
		'p' => $post_ID,
		'post_type' => 'post',
		'post_status' => 'publish'
	);
	
	$posts = new WP_Query($args);
	?>
	<div class="blog-wraper">
	<?php
	/*
	 * @author: tangyuan
	 * @date: 2016-11-29
	 * @desc: 六宫格文章详情
	*/
	while ($posts->have_posts()) { 
			$posts->the_post();
	?>
		<div class="container">
			<h2 class="info-title">
				<?php the_title(); ?>
			</h2>
			<div class="info-data">
				<span><?php the_time('Y年m月j日')?></span>
			</div>
			<div class="info-content">
				<?php the_content(); ?>
			</div>
		</div>
	<?php 
	} 
	?>
	</div>

<?php
	// echo urldecode(json_encode($blog));
	wp_reset_postdata();
	exit;
}

// guest用户执行函数
add_action('wp_ajax_nopriv_load_post_ajax', 'load_post_ajax');
// 登录用户执行函数
add_action('wp_ajax_load_post_ajax', 'load_post_ajax');

/*----------------------------IE dector-------------------------------------*/
function is_ie() {
	global $is_IE;
	return ( $is_IE && jlc_get_ie_version() <= 9 );
}

function jlc_get_ie_version() {
   preg_match( '/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $version_no );
   return $version_no[1];
}

/*
	@author: maxm
	@date: 2016-12-39
	@desc: 获取文章第一个段落

*/ 
function get_first_paragraph($content){
	global $post;
	
	$str = wpautop( $content );
	$str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
	$str = strip_tags($str, '<a><strong><em>');
	return $str;
}

function wp_first_paragraph_excerpt( $id=null ) {
    // Set $id to the current post by default
    if( !$id ) {
        global $post;
        $id = get_the_id();
    }
    // Get the post content
    $content = get_post_field( 'post_content', $id );
    $content = apply_filters( 'the_content', strip_shortcodes( $content ) );
    // Remove all tags, except paragraphs
    $excerpt = strip_tags( $content, '<p></p>' );
    // Remove empty paragraph tags
    $excerpt = force_balance_tags( $excerpt );
    $excerpt = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $excerpt );
    $excerpt = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $excerpt );
    // Get the first paragraph
    $excerpt = substr( $excerpt, 0, strpos( $excerpt, '</p>' ) + 4 );
    // Remove remaining paragraph tags
    $excerpt = strip_tags( $excerpt );
    return $excerpt;
}