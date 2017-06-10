<!--产品展示视频 -->
<?php
/*
插件方案
 */
$video_index = 21;

$video_post = unserialize(get_post_meta($video_index, 'PGP_all_photos_details', true));
$video = get_post_meta($video_index, 'PGP_total_images_count', true);

if (!$video) {
	return;
}

foreach ($video_post as $v) {
	$poster_url = $v['PGP_image_url'];
	$video_url = $v['PGP_video_link'];
	$preview_url = $v['PGP_external_link'];
}

?>
<!-- todo:添加默认的封面图案 -->
<div class="sections swiper-slide">
	<div class="product-video">
		<div class="container">
			<video id="product-intro-video"
				class="video-js vjs-default-skin product-video-content hide">
				<source src="<?php echo esc_url($video_url) ?>" type='video/mp4'>
			</video>
			<i class="btn-play"></i>
		</div>
	</div>
	<div class="product-mask">
	</div>
	<video id="product-preview-video"
		class="video-js vjs-default-skin product-video-content poster">
		<source src="<?php echo esc_url($preview_url) ?>" type='video/mp4'>
	</video>
</div>
<!-- 视频展示end-->