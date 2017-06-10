<!DOCTYPE html>
<html lang="zh-CN">
<!-- header -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo get_bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/public/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/public/images/favicon.ico" type="image/x-icon">
<?php
$static_uri = get_template_directory_uri() . '/public/css/';
$main_css = $static_uri . 'main.css';
$loader_css = $static_uri . 'component.css';

$video_css = get_template_directory_uri() . '/public/video-js/video-js.min.css';

$baseUri = get_template_directory_uri() . '/public/js/';
$swiperJs = $baseUri . 'swiper2.min.js';
$jqueryJS = $baseUri . 'jquery-1.9.1.js';

$classieJs = $baseUri . 'classie.js';
$svgLoader = $baseUri . 'svgLoader.js';
$snapJs = $baseUri . 'snap.svg-min.js';
?>

    <link rel="stylesheet" href="<?php echo $main_css ?>">
    <link rel="stylesheet" href="<?php echo $video_css ?>">
    <link rel="stylesheet" href="<?php echo $loader_css ?>">

    <script src="<?php echo $jqueryJS; ?>"></script>
    <script src="<?php echo $snapJs; ?>"></script>
    <script src="<?php echo $classieJs; ?>"></script>
    <script src="<?php echo $svgLoader; ?>"></script>
</head>
<!-- header end -->
<body>
<!-- preloader -->
<!-- <div id="loader" class="pageload-overlay" data-opening="M 0,60 80,60 80,25 0,10 0,60;M 0,60 80,60 80,0 0,0 0,60" data-closing="M 0,60 80,60 80,20 0,0 0,60;M 0,60 80,60 80,20 0,40 0,60;m 0,60 80,0 0,0 -80,0"> -->
<div id="loader" class="pageload-overlay" data-opening="M 0,60 80,60 80,25 0,10 0,60;M 0,60 80,60 80,0 0,0 0,60">
    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 0 0" preserveAspectRatio="none">
        <path d="m 0,60 80,0 0,0 -80,0"/>
    </svg>
</div>
<script>
    (function() {
        var loader = new SVGLoader( document.getElementById( 'loader' ), {
                speedIn : 200,
                easingIn : mina.linear,
            });
        loader.show();
        $(document).on('ready', function(){
            setTimeout( function() {
                $('#loader').fadeOut(300);
            }, 1000);
        });
    })();
</script>
<!-- preloader end -->
