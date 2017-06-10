
<!--首页轮播图-->
<?php
// 从插件中获取轮播组信息
$carousel_index = 10;
$carousel_images = unserialize(get_post_meta($carousel_index, 'PGP_all_photos_details', true));
$images = get_post_meta($carousel_index, 'PGP_total_images_count', true);
if (!$images) {
	return;
}
?>
<div class="sections swiper-slide">
    <div class="index-carousel swiper-container">
        <div class="swiper-wrapper">
        <?php
            foreach ($carousel_images as $image) {
                $url = $image['PGP_image_url'];
                $link = $image['PGP_external_link'];
                if (esc_url($link)) {
                    $anchor = esc_url($link);
                } else {
                    $anchor = '/#';
                }
                ?>
                            <div class="swiper-slide">
                                <a href = "<?php echo $anchor ?>" class="container">
                                    <div class="carousel-img" data-url="<?php echo esc_url($url); ?>">
                                    </div>
                                </a>
                            </div>
                    <?php
            }
        ?>
        </div>
        <div class="index-pagination">
            <div class="index-carousel-cursor"></div>
        </div>
    </div>
</div>
<!--首页轮播图end-->
