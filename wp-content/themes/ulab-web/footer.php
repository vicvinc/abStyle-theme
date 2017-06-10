<!-- footer scripts -->
<?php
$baseUri = get_template_directory_uri() . '/public/js/';
$swiperJs = $baseUri . 'swiper2.min.js';
$jqueryJS = $baseUri . 'jquery-1.9.1.js';
$mainJs = $baseUri . 'main.js';
$mapJs = $baseUri . 'map.js';
$videoJs = get_template_directory_uri() . '/public/video-js/video.min.js';
?>

<script src=<?php echo $jqueryJS; ?> ></script>
<script src="<?php echo $swiperJs; ?>"></script>
<script src="<?php echo $videoJs; ?>"></script>

<script type="text/javascript">
	$(document).on('ready', function() {
		$('.main-navgation').fadeIn().removeClass('hide');
		$('.page-sections').fadeIn().removeClass('hide');
	});
</script>
<?php
if (is_home()) {
	?>
			<script src="<?php echo $mainJs; ?>"></script>
			<script src="<?php echo $mapJs; ?>" async></script>
		<?php
} else {
	?>
			<script type="text/javascript">
			    var thisHref = window.location.href;
			    if (thisHref.indexOf('about-us-web') != -1) {
			        $('.main-navgation').addClass('navgation-trans');
			        $('.nav-link.active').removeClass('active');
			        $('.nav-link').last().addClass('active');
			    }
			</script>
		<?php
}
?>
<?php
wp_footer();
?>
<!-- footer end  -->
</body>
</html>