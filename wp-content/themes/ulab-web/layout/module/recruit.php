<!--招聘职位 -->
<?php
// 从插件中获取轮播组信息
$carousel_index = 18;
$carousel_images = unserialize(get_post_meta($carousel_index, 'PGP_all_photos_details', true));
$images = get_post_meta($carousel_index, 'PGP_total_images_count', true);

if (!$images) {
	return;
}
?>
<div class="sections swiper-slide">
    <div class="recruit">
        <!--招聘说明start-->
        <div class="recruit-state">
            <div class="container">
                <p class='h2'>宅腐萌基好青年一起来战吧!</p>
                <a class="mail-to" href="mailto:hr@xmunicorn.com" >申请职位：
                    <span>hr@xmunicorn.com </span>
                </a>
                <p class="addr">公司地址：
                    <span>厦门市软件园2期望海路14号之一3层</span>
                </p>
                <p class="addr">
                    公交线路：
                    <span>可搭乘28路、29路、38路、39路、47路、88路等至软件园站下车。</span>
                </p>
                <p class="addr">BRT线路：
                    <span>乘坐快速公交至BRT前埔枢纽站下车，转乘BRT链接线L27。</span>
                </p>
                <p class="treat">公司提供：
                    <span>五天八小时工作制，五险一金，商业保险,生日礼金,结婚礼金等。每周</span>
                </p>
                <p class="treat treat-2">三下午员工活动，不定期团键（看电影，聚餐等）。</p>
            </div>
            <a class="job-position" target="_blank" href="https://www.lagou.com/gongsi/j51769.html"></a>
        </div>
        <!--招聘说明end-->
        <!--招聘轮播start-->
        <div class="carousel-wrapper">
            <div class="recruit-carousel swiper-container">
                <div class="swiper-wrapper">
<?php
foreach ($carousel_images as $image) {
	$url = $image['PGP_image_url'];
	$link = $image['PGP_external_link'];
	if ($link) {
		?>
        <a href="<?php echo esc_url($link); ?>" target="_blank" class="container swiper-slide">
    <?php
} else {
		?>
        <a onclick="javascript:void(0)" class="container swiper-slide">
    <?php
}
	?>
                        <div class="recruit-img" data-url="<?php echo esc_url($url); ?>"></div>
                    </a>
<?php
}
?>
                </div>
            </div>
        </div>
        <!--招聘轮播end-->
    </div>
    <!--公司说明start-->
    <div class="recruit-footer">
        <div class="delima"></div>
        <div class="declare-wrap">
            <div class="declare">联合优创始终视人才为企业的生命，
        除为员工提供具有竞争力的薪酬及完善的福利保障外，
        还定期举办员工活动并提供日本游学机会。
        加入联合优创，
        不仅能接触并亲手打造世界领先的软件产品、制作具有市场影响力的原创作品，
        还能结识一群与你同样优秀的小伙伴，
        宅腐萌基好青年一起来战吧！
            </div>
        </div>
    </div>
    <!--公司说明end-->
</div>
<!-- 招聘职位end -->