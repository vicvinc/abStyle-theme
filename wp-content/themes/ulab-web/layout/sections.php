<!-- page sections -->
<div class="page-sections swiper-container hide">
    <div class="swiper-wrapper">
		<?php
			$base_dir = get_template_directory() . '/layout/module/';
			//首页轮播
			require $base_dir . 'index-carousel.php';
			//产品视频
			require $base_dir . 'product-video.php';
			//产品轮播
			require $base_dir . 'product-carousel.php';
			//动态信息
			require $base_dir . 'blog-carousel.php';
			//招聘职位
			require $base_dir . 'recruit.php';
			//联系我们
			require $base_dir . 'contract-us.php';
		?>
	</div>
</div>
<!-- /pageload-overlay -->
<!-- page sections end -->
