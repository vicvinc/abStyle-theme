<?php $border_radius = 0 ;

if($PGP_Gallery_Layout=="col-md-6")
	{
		$font_size = 20;
	}
	else{
		$font_size = 16;
	}

 ?>
<style>
.item-hover-<?php echo $PGP_Id;?> {
    position: relative;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>,
.item-hover-<?php echo $PGP_Id;?> * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.item-hover-<?php echo $PGP_Id;?> a {
    color: #333;
}
.item-hover-<?php echo $PGP_Id;?> a:hover {
    text-decoration: none;
}
.item-hover-<?php echo $PGP_Id;?> img {
    width: 100%;
    height: 100%;
}

.item-hover-<?php echo $PGP_Id;?>.circle {
    position: relative;
    width: 100%;
    height: auto;
    border-radius: <?php echo $border_radius; ?>%;
}
.item-hover-<?php echo $PGP_Id;?>.circle .img {
    position: relative;
    width: 100%;
    height: auto;
    border-radius: <?php echo $border_radius; ?>%;
}
.item-hover-<?php echo $PGP_Id;?>.circle .img:before {
    position: absolute;
    display: block;
    content: '';
    width: 100%;
    height: 100%;
    border-radius: <?php echo $border_radius; ?>%;
	
	<?php if($PGP_Image_Border=="yes"){?>
		box-shadow: inset 0 0 0 10px rgba(255, 255, 255, 0.6), 0 1px 2px rgba(0, 0, 0, 0.3); 
	<?php }else { ?>
		box-shadow: inset 0 0 0 0px rgba(255, 255, 255, 0.6), 0 1px 2px rgba(0, 0, 0, 0.3);
	<?php } ?>
	
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle .img img {
    border-radius: <?php echo $border_radius; ?>%;
}
.item-hover-<?php echo $PGP_Id;?>.circle .info {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    text-align: center;
    border-radius: <?php echo $border_radius; ?>%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}

.item-hover-<?php echo $PGP_Id;?>.square {
    position: relative;
    width: 316px;
    height: 216px;
    border: 8px solid #fff;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
}
.item-hover-<?php echo $PGP_Id;?>.square .info {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    text-align: center;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect2 .img {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect2.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect2 .info {
    background: #333333;
    background: rgba(0, 0, 0, 0.6);
    opacity: 0;
    pointer-events: none;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect2 .info h3 {
    color: #fff;
    text-transform: uppercase;
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect2.left_to_right .info {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect2.left_to_right a:hover .img {
    -webkit-transform: rotate(-180deg);
    -moz-transform: rotate(-180deg);
    -ms-transform: rotate(-180deg);
    -o-transform: rotate(-180deg);
    transform: rotate(-180deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect2.left_to_right a:hover .info {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect2.right_to_left .info {
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect2.right_to_left a:hover .img {
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect2.right_to_left a:hover .info {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect2.top_to_bottom .info {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect2.top_to_bottom a:hover .img {
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect2.top_to_bottom a:hover .info {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect2.bottom_to_top .info {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect2.bottom_to_top a:hover .img {
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect2.bottom_to_top a:hover .info {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect3 .img {
    z-index: 11;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3 .info {
    background: #333333;
    opacity: 0;
    pointer-events: none;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3 .info h3 {
    color: #fff;
    position: relative;
    letter-spacing: 2px;
	font-size: <?php echo $font_size ?>px;
	<?php if($PGP_Effect_animation == 'left_to_right' || $PGP_Effect_animation == 'right_to_left') {?>
	margin: 0 30px;
	<?php } else { ?>
	margin: 0 10px;
	<?php } ?>
	<?php if( $PGP_Effect_animation == 'bottom_to_top') {?>
	padding-top: 50%;
	<?php } else { ?>
	padding: 20% 0 0 0;
	<?php } ?>

    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect3.left_to_right .img {
    -webkit-transform: scale(1) translateX(0);
    -moz-transform: scale(1) translateX(0);
    -ms-transform: scale(1) translateX(0);
    -o-transform: scale(1) translateX(0);
    transform: scale(1) translateX(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3.left_to_right .info {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3.left_to_right a:hover .img {
    -webkit-transform: scale(0.5) translateX(100%);
    -moz-transform: scale(0.5) translateX(100%);
    -ms-transform: scale(0.5) translateX(100%);
    -o-transform: scale(0.5) translateX(100%);
    transform: scale(0.5) translateX(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3.left_to_right a:hover .info {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect3.right_to_left .img {
    -webkit-transform: scale(1) translateX(0);
    -moz-transform: scale(1) translateX(0);
    -ms-transform: scale(1) translateX(0);
    -o-transform: scale(1) translateX(0);
    transform: scale(1) translateX(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3.right_to_left .info {
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3.right_to_left a:hover .img {
    -webkit-transform: scale(0.5) translateX(-100%);
    -moz-transform: scale(0.5) translateX(-100%);
    -ms-transform: scale(0.5) translateX(-100%);
    -o-transform: scale(0.5) translateX(-100%);
    transform: scale(0.5) translateX(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3.right_to_left a:hover .info {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect3.top_to_bottom .img {
    -webkit-transform: scale(1) translateY(0);
    -moz-transform: scale(1) translateY(0);
    -ms-transform: scale(1) translateY(0);
    -o-transform: scale(1) translateY(0);
    transform: scale(1) translateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3.top_to_bottom .info {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3.top_to_bottom a:hover .img {
    -webkit-transform: scale(0.5) translateY(100%);
    -moz-transform: scale(0.5) translateY(100%);
    -ms-transform: scale(0.5) translateY(100%);
    -o-transform: scale(0.5) translateY(100%);
    transform: scale(0.5) translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3.top_to_bottom a:hover .info {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect3.bottom_to_top .img {
    -webkit-transform: scale(1) translateY(0);
    -moz-transform: scale(1) translateY(0);
    -ms-transform: scale(1) translateY(0);
    -o-transform: scale(1) translateY(0);
    transform: scale(1) translateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3.bottom_to_top .info {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3.bottom_to_top a:hover .img {
    -webkit-transform: scale(0.5) translateY(-100%);
    -moz-transform: scale(0.5) translateY(-100%);
    -ms-transform: scale(0.5) translateY(-100%);
    -o-transform: scale(0.5) translateY(-100%);
    transform: scale(0.5) translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect3.bottom_to_top a:hover .info {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect4 .img {
    opacity: 1;
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4 .info {
    background: #333333;
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    -webkit-transition: all 0.35s ease;
    -moz-transition: all 0.35s ease;
    transition: all 0.35s ease;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4 .info h3 {
    color: #fff;
    
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4 .info p {
    color: #bbb;
    padding: 10px 5px;
    font-style: italic;
    margin: 0 30px;
    font-size: 12px;
    border-top: 1px solid rgba(255, 255, 255, 0.5);
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4 a:hover .img {
    opacity: 0;
    pointer-events: none;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4 a:hover .info {
    visibility: visible;
    opacity: 1;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect4.left_to_right .img {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4.left_to_right .info {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4.left_to_right a:hover .img {
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4.left_to_right a:hover .info {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect4.right_to_left .img {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4.right_to_left .info {
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4.right_to_left a:hover .img {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4.right_to_left a:hover .info {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect4.top_to_bottom .img {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4.top_to_bottom .info {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4.top_to_bottom a:hover .img {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4.top_to_bottom a:hover .info {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect4.bottom_to_top .img {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4.bottom_to_top .info {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4.bottom_to_top a:hover .img {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect4.bottom_to_top a:hover .info {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect5 {
    -webkit-perspective: 900px;
    -moz-perspective: 900px;
    perspective: 900px;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect5.colored .info .info-back {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 0.76);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect5 .info {
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    -o-transform-style: preserve-3d;
    transform-style: preserve-3d;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect5 .info .info-back {
    visibility: hidden;
    border-radius: <?php echo $border_radius; ?>%;
    width: 100%;
    height: 100%;
    background: #333333;
    background: rgba(0, 0, 0, 0.6);
    -webkit-transform: rotate3d(0, 1, 0, 180deg);
    -moz-transform: rotate3d(0, 1, 0, 180deg);
    -ms-transform: rotate3d(0, 1, 0, 180deg);
    -o-transform: rotate3d(0, 1, 0, 180deg);
    transform: rotate3d(0, 1, 0, 180deg);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect5 .info h3 {
    color: #fff;
    
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect5 a:hover .info {
    -webkit-transform: rotate3d(0, 1, 0, -180deg);
    -moz-transform: rotate3d(0, 1, 0, -180deg);
    -ms-transform: rotate3d(0, 1, 0, -180deg);
    -o-transform: rotate3d(0, 1, 0, -180deg);
    transform: rotate3d(0, 1, 0, -180deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect5 a:hover .info .info-back {
    visibility: visible;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect6 .img {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect6.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect6 .info {
    background: #333333;
    opacity: 0;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect6 .info h3 {
    color: #fff;
    
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect6.scale_up .info {
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect6.scale_up a:hover .img {
    opacity: 0;
    -webkit-transform: scale(1.5);
    -moz-transform: scale(1.5);
    -ms-transform: scale(1.5);
    -o-transform: scale(1.5);
    transform: scale(1.5);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect6.scale_up a:hover .info {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect6.scale_down .info {
    -webkit-transform: scale(1.5);
    -moz-transform: scale(1.5);
    -ms-transform: scale(1.5);
    -o-transform: scale(1.5);
    transform: scale(1.5);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect6.scale_down a:hover .img {
    opacity: 0;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect6.scale_down a:hover .info {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect6.scale_down_up .info {
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
    -webkit-transition: all 0.35s ease-in-out 0.2s;
    -moz-transition: all 0.35s ease-in-out 0.2s;
    transition: all 0.35s ease-in-out 0.2s;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect6.scale_down_up a:hover .img {
    opacity: 0;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect6.scale_down_up a:hover .info {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect7 .img {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.35s ease-out;
    -moz-transition: all 0.35s ease-out;
    transition: all 0.35s ease-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect7.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect7 .info {
    background: #333333;
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    -webkit-transition: all 0.35s ease 0.2s;
    -moz-transition: all 0.35s ease 0.2s;
    transition: all 0.35s ease 0.2s;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect7 .info h3 {
    color: #fff;
    
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect7 a:hover .img {
    opacity: 0;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect7 a:hover .info {
    visibility: visible;
    opacity: 1;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect7.left_to_right .info {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect7.left_to_right a:hover .info {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect7.right_to_left .info {
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect7.right_to_left a:hover .info {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect7.top_to_bottom .info {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect7.top_to_bottom a:hover .info {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect7.bottom_to_top .info {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect7.bottom_to_top a:hover .info {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect8.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8 .img-container {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8 .img-container .img {
    opacity: 1;
    -webkit-transition: all 0.3s ease-in-out 0.3s;
    -moz-transition: all 0.3s ease-in-out 0.3s;
    transition: all 0.3s ease-in-out 0.3s;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8 .info-container {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    text-align: center;
    border-radius: <?php echo $border_radius; ?>%;
    opacity: 0;
    pointer-events: none;
    -webkit-transition: all 0.3s ease-in-out 0.3s;
    -moz-transition: all 0.3s ease-in-out 0.3s;
    transition: all 0.3s ease-in-out 0.3s;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8 .info {
    width: 100%;
    height: 100%;
    background: #333333;
    pointer-events: none;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
    -webkit-transition: all 0.35s ease-in-out 0.6s;
    -moz-transition: all 0.35s ease-in-out 0.6s;
    transition: all 0.35s ease-in-out 0.6s;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8 .info h3 {
    color: #fff;
    
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 140px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect8 a:hover .img-container {
    pointer-events: none;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8 a:hover .img-container .img {
    opacity: 0;
    pointer-events: none;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8 a:hover .info-container {
    opacity: 1;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8 a:hover .info-container .info {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect8.left_to_right .img-container .img {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8.left_to_right .info-container {
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8.left_to_right a:hover .img-container .img {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8.left_to_right a:hover .info-container {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect8.right_to_left .img-container .img {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8.right_to_left .info-container {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8.right_to_left a:hover .img-container .img {
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8.right_to_left a:hover .info-container {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect8.top_to_bottom .img-container .img {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8.top_to_bottom .info-container {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8.top_to_bottom a:hover .img-container .img {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8.top_to_bottom a:hover .info-container {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect8.bottom_to_top .img-container .img {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8.bottom_to_top .info-container {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8.bottom_to_top a:hover .img-container .img {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect8.bottom_to_top a:hover .info-container {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect9 .img {
    opacity: 1;
    -webkit-transition: all 0.35s ease-out;
    -moz-transition: all 0.35s ease-out;
    transition: all 0.35s ease-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect9.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect9 .info {
    background: #333333;
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
    -webkit-transition: all 0.35s ease 0.2s;
    -moz-transition: all 0.35s ease 0.2s;
    transition: all 0.35s ease 0.2s;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect9 .info h3 {
    color: #fff;
    
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 55px 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect9 .info p {
    color: #bbb;
    padding: 10px 5px;
    font-style: italic;
    margin: 0 30px;
    font-size: 12px;
    border-top: 1px solid rgba(255, 255, 255, 0.5);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect9 a:hover .img {
    opacity: 0;
    pointer-events: none;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect9 a:hover .info {
    visibility: visible;
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect9.left_to_right .img {
    -webkit-transform: translateX(0) rotate(0);
    -moz-transform: translateX(0) rotate(0);
    -ms-transform: translateX(0) rotate(0);
    -o-transform: translateX(0) rotate(0);
    transform: translateX(0) rotate(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect9.left_to_right a:hover .img {
    -webkit-transform: translateX(100%) rotate(180deg);
    -moz-transform: translateX(100%) rotate(180deg);
    -ms-transform: translateX(100%) rotate(180deg);
    -o-transform: translateX(100%) rotate(180deg);
    transform: translateX(100%) rotate(180deg);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect9.right_to_left .img {
    -webkit-transform: translateX(0) rotate(0);
    -moz-transform: translateX(0) rotate(0);
    -ms-transform: translateX(0) rotate(0);
    -o-transform: translateX(0) rotate(0);
    transform: translateX(0) rotate(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect9.right_to_left a:hover .img {
    -webkit-transform: translateX(-100%) rotate(-180deg);
    -moz-transform: translateX(-100%) rotate(-180deg);
    -ms-transform: translateX(-100%) rotate(-180deg);
    -o-transform: translateX(-100%) rotate(-180deg);
    transform: translateX(-100%) rotate(-180deg);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect9.top_to_bottom .img {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect9.top_to_bottom a:hover .img {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect9.bottom_to_top .img {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect9.bottom_to_top a:hover .img {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect10 .img {
    z-index: 11;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect10.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect10 .info {
    background: #333333;
    opacity: 0;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect10 .info h3 {
    color: #fff;
    
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect10 a:hover .info {
    visibility: visible;
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect10.top_to_bottom .info h3 {
    margin: 0 30px;
    padding: 25px 0 0 0;
    height: 78px;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect10.top_to_bottom .info p {
    margin: 0 10px;
    padding: 5px;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect10.top_to_bottom a:hover .img {
    -webkit-transform: translateY(22%) scale(0.5);
    -moz-transform: translateY(22%) scale(0.5);
    -ms-transform: translateY(22%) scale(0.5);
    -o-transform: translateY(22%) scale(0.5);
    transform: translateY(22%) scale(0.5);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect10.bottom_to_top .info h3 {
    margin: 60% 10px 0;
    padding-bottom: 25px 0 0 0;
    height: 78px;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect10.bottom_to_top a:hover .img {
    -webkit-transform: translateY(-22%) scale(0.5);
    -moz-transform: translateY(-22%) scale(0.5);
    -ms-transform: translateY(-22%) scale(0.5);
    -o-transform: translateY(-22%) scale(0.5);
    transform: translateY(-22%) scale(0.5);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect11 {
    -webkit-perspective: 900px;
    -moz-perspective: 900px;
    perspective: 900px;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11 .img {
    opacity: 1;
    -webkit-transform-origin: 50% 50%;
    -moz-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    -o-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11 .info {
    background: #333333;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all 0.35s ease 0.35s;
    -moz-transition: all 0.35s ease 0.35s;
    transition: all 0.35s ease 0.35s;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11 .info h3 {
    color: #fff;
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 20px;
    padding: 20% 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect11 a:hover .img {
    opacity: 0;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11 a:hover .info {
    visibility: visible;
    opacity: 1;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect11.left_to_right .img {
    -webkit-transform: translateZ(0) rotateY(0);
    -moz-transform: translateZ(0) rotateY(0);
    -ms-transform: translateZ(0) rotateY(0);
    -o-transform: translateZ(0) rotateY(0);
    transform: translateZ(0) rotateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11.left_to_right .info {
    -webkit-transform: translateZ(-1000px) rotateY(-90deg);
    -moz-transform: translateZ(-1000px) rotateY(-90deg);
    -ms-transform: translateZ(-1000px) rotateY(-90deg);
    -o-transform: translateZ(-1000px) rotateY(-90deg);
    transform: translateZ(-1000px) rotateY(-90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11.left_to_right a:hover .img {
    -webkit-transform: translateZ(-1000px) rotateY(90deg);
    -moz-transform: translateZ(-1000px) rotateY(90deg);
    -ms-transform: translateZ(-1000px) rotateY(90deg);
    -o-transform: translateZ(-1000px) rotateY(90deg);
    transform: translateZ(-1000px) rotateY(90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11.left_to_right a:hover .info {
    -webkit-transform: translateZ(0) rotateY(0);
    -moz-transform: translateZ(0) rotateY(0);
    -ms-transform: translateZ(0) rotateY(0);
    -o-transform: translateZ(0) rotateY(0);
    transform: translateZ(0) rotateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect11.right_to_left .img {
    -webkit-transform: translateZ(0) rotateY(0);
    -moz-transform: translateZ(0) rotateY(0);
    -ms-transform: translateZ(0) rotateY(0);
    -o-transform: translateZ(0) rotateY(0);
    transform: translateZ(0) rotateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11.right_to_left .info {
    -webkit-transform: translateZ(-1000px) rotateY(90deg);
    -moz-transform: translateZ(-1000px) rotateY(90deg);
    -ms-transform: translateZ(-1000px) rotateY(90deg);
    -o-transform: translateZ(-1000px) rotateY(90deg);
    transform: translateZ(-1000px) rotateY(90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11.right_to_left a:hover .img {
    -webkit-transform: translateZ(-1000px) rotateY(-90deg);
    -moz-transform: translateZ(-1000px) rotateY(-90deg);
    -ms-transform: translateZ(-1000px) rotateY(-90deg);
    -o-transform: translateZ(-1000px) rotateY(-90deg);
    transform: translateZ(-1000px) rotateY(-90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11.right_to_left a:hover .info {
    -webkit-transform: translateZ(0) rotateY(0);
    -moz-transform: translateZ(0) rotateY(0);
    -ms-transform: translateZ(0) rotateY(0);
    -o-transform: translateZ(0) rotateY(0);
    transform: translateZ(0) rotateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect11.top_to_bottom .img {
    -webkit-transform: translateZ(0) rotateX(0);
    -moz-transform: translateZ(0) rotateX(0);
    -ms-transform: translateZ(0) rotateX(0);
    -o-transform: translateZ(0) rotateX(0);
    transform: translateZ(0) rotateX(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11.top_to_bottom .info {
    -webkit-transform: translateZ(-1000px) rotateX(90deg);
    -moz-transform: translateZ(-1000px) rotateX(90deg);
    -ms-transform: translateZ(-1000px) rotateX(90deg);
    -o-transform: translateZ(-1000px) rotateX(90deg);
    transform: translateZ(-1000px) rotateX(90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11.top_to_bottom a:hover .img {
    -webkit-transform: translateZ(-1000px) rotateX(-90deg);
    -moz-transform: translateZ(-1000px) rotateX(-90deg);
    -ms-transform: translateZ(-1000px) rotateX(-90deg);
    -o-transform: translateZ(-1000px) rotateX(-90deg);
    transform: translateZ(-1000px) rotateX(-90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11.top_to_bottom a:hover .info {
    -webkit-transform: translateZ(0) rotateX(0);
    -moz-transform: translateZ(0) rotateX(0);
    -ms-transform: translateZ(0) rotateX(0);
    -o-transform: translateZ(0) rotateX(0);
    transform: translateZ(0) rotateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect11.bottom_to_top .img {
    -webkit-transform: translateZ(0) rotateX(0);
    -moz-transform: translateZ(0) rotateX(0);
    -ms-transform: translateZ(0) rotateX(0);
    -o-transform: translateZ(0) rotateX(0);
    transform: translateZ(0) rotateX(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11.bottom_to_top .info {
    -webkit-transform: translateZ(-1000px) rotateX(-90deg);
    -moz-transform: translateZ(-1000px) rotateX(-90deg);
    -ms-transform: translateZ(-1000px) rotateX(-90deg);
    -o-transform: translateZ(-1000px) rotateX(-90deg);
    transform: translateZ(-1000px) rotateX(-90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11.bottom_to_top a:hover .img {
    -webkit-transform: translateZ(-1000px) rotateX(90deg);
    -moz-transform: translateZ(-1000px) rotateX(90deg);
    -ms-transform: translateZ(-1000px) rotateX(90deg);
    -o-transform: translateZ(-1000px) rotateX(90deg);
    transform: translateZ(-1000px) rotateX(90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect11.bottom_to_top a:hover .info {
    -webkit-transform: translateZ(0) rotateX(0);
    -moz-transform: translateZ(0) rotateX(0);
    -ms-transform: translateZ(0) rotateX(0);
    -o-transform: translateZ(0) rotateX(0);
    transform: translateZ(0) rotateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect12 .img {
    opacity: 1;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12 .info {
    background: #333333;
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12 .info h3 {
    color: #fff;
    
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect12 a:hover .img {
    opacity: 0;
    pointer-events: none;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12 a:hover .info {
    opacity: 1;
    visibility: visible;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect12.left_to_right .img {
    -webkit-transform: translateX(0) rotate(0);
    -moz-transform: translateX(0) rotate(0);
    -ms-transform: translateX(0) rotate(0);
    -o-transform: translateX(0) rotate(0);
    transform: translateX(0) rotate(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12.left_to_right .info {
    -webkit-transform: translateX(100%) rotate(180deg);
    -moz-transform: translateX(100%) rotate(180deg);
    -ms-transform: translateX(100%) rotate(180deg);
    -o-transform: translateX(100%) rotate(180deg);
    transform: translateX(100%) rotate(180deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12.left_to_right a:hover .img {
    -webkit-transform: translateX(100%) rotate(180deg);
    -moz-transform: translateX(100%) rotate(180deg);
    -ms-transform: translateX(100%) rotate(180deg);
    -o-transform: translateX(100%) rotate(180deg);
    transform: translateX(100%) rotate(180deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12.left_to_right a:hover .info {
    -webkit-transform: translateX(0) rotate(0);
    -moz-transform: translateX(0) rotate(0);
    -ms-transform: translateX(0) rotate(0);
    -o-transform: translateX(0) rotate(0);
    transform: translateX(0) rotate(0);
    -webkit-transition-delay: 0.4s;
    -moz-transition-delay: 0.4s;
    transition-delay: 0.4s;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect12.right_to_left .img {
    -webkit-transform: translateX(0) rotate(0);
    -moz-transform: translateX(0) rotate(0);
    -ms-transform: translateX(0) rotate(0);
    -o-transform: translateX(0) rotate(0);
    transform: translateX(0) rotate(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12.right_to_left .info {
    -webkit-transform: translateX(-100%) rotate(-180deg);
    -moz-transform: translateX(-100%) rotate(-180deg);
    -ms-transform: translateX(-100%) rotate(-180deg);
    -o-transform: translateX(-100%) rotate(-180deg);
    transform: translateX(-100%) rotate(-180deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12.right_to_left a:hover .img {
    -webkit-transform: translateX(-100%) rotate(-180deg);
    -moz-transform: translateX(-100%) rotate(-180deg);
    -ms-transform: translateX(-100%) rotate(-180deg);
    -o-transform: translateX(-100%) rotate(-180deg);
    transform: translateX(-100%) rotate(-180deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12.right_to_left a:hover .info {
    -webkit-transform: translateX(0) rotate(0);
    -moz-transform: translateX(0) rotate(0);
    -ms-transform: translateX(0) rotate(0);
    -o-transform: translateX(0) rotate(0);
    transform: translateX(0) rotate(0);
    -webkit-transition-delay: 0.4s;
    -moz-transition-delay: 0.4s;
    transition-delay: 0.4s;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect12.top_to_bottom .img {
    -webkit-transform: translateY(0) rotate(0);
    -moz-transform: translateY(0) rotate(0);
    -ms-transform: translateY(0) rotate(0);
    -o-transform: translateY(0) rotate(0);
    transform: translateY(0) rotate(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12.top_to_bottom .info {
    -webkit-transform: translateY(-100%) rotate(-180deg);
    -moz-transform: translateY(-100%) rotate(-180deg);
    -ms-transform: translateY(-100%) rotate(-180deg);
    -o-transform: translateY(-100%) rotate(-180deg);
    transform: translateY(-100%) rotate(-180deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12.top_to_bottom a:hover .img {
    -webkit-transform: translateY(-100%) rotate(-180deg);
    -moz-transform: translateY(-100%) rotate(-180deg);
    -ms-transform: translateY(-100%) rotate(-180deg);
    -o-transform: translateY(-100%) rotate(-180deg);
    transform: translateY(-100%) rotate(-180deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12.top_to_bottom a:hover .info {
    -webkit-transform: translateY(0) rotate(0);
    -moz-transform: translateY(0) rotate(0);
    -ms-transform: translateY(0) rotate(0);
    -o-transform: translateY(0) rotate(0);
    transform: translateY(0) rotate(0);
    -webkit-transition-delay: 0.4s;
    -moz-transition-delay: 0.4s;
    transition-delay: 0.4s;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect12.bottom_to_top .img {
    -webkit-transform: translateY(0) rotate(0);
    -moz-transform: translateY(0) rotate(0);
    -ms-transform: translateY(0) rotate(0);
    -o-transform: translateY(0) rotate(0);
    transform: translateY(0) rotate(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12.bottom_to_top .info {
    -webkit-transform: translateY(100%) rotate(180deg);
    -moz-transform: translateY(100%) rotate(180deg);
    -ms-transform: translateY(100%) rotate(180deg);
    -o-transform: translateY(100%) rotate(180deg);
    transform: translateY(100%) rotate(180deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12.bottom_to_top a:hover .img {
    -webkit-transform: translateY(100%) rotate(180deg);
    -moz-transform: translateY(100%) rotate(180deg);
    -ms-transform: translateY(100%) rotate(180deg);
    -o-transform: translateY(100%) rotate(180deg);
    transform: translateY(100%) rotate(180deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect12.bottom_to_top a:hover .info {
    -webkit-transform: translateY(0) rotate(0);
    -moz-transform: translateY(0) rotate(0);
    -ms-transform: translateY(0) rotate(0);
    -o-transform: translateY(0) rotate(0);
    transform: translateY(0) rotate(0);
    -webkit-transition-delay: 0.4s;
    -moz-transition-delay: 0.4s;
    transition-delay: 0.4s;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect13.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect13 .info {
    background: #333333;
    background: rgba(0, 0, 0, 0.6);
    opacity: 0;
    pointer-events: none;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect13 .info h3 {
    visibility: hidden;
    color: #fff;
    
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect13 a:hover .info {
    opacity: 1;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect13 a:hover h3 {
    visibility: visible;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect13 a:hover p {
    visibility: visible;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect13.from_left_and_right .info h3 {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect13.from_left_and_right .info p {
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect13.from_left_and_right a:hover h3 {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect13.from_left_and_right a:hover p {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect13.top_to_bottom .info h3 {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect13.top_to_bottom .info p {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect13.top_to_bottom a:hover h3 {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect13.top_to_bottom a:hover p {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect13.bottom_to_top .info h3 {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect13.bottom_to_top .info p {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect13.bottom_to_top a:hover h3 {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect13.bottom_to_top a:hover p {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect14 {
    -webkit-perspective: 900px;
    -moz-perspective: 900px;
    perspective: 900px;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14 .img {
    visibility: visible;
    opacity: 1;
    -webkit-transition: all 0.4s ease-out;
    -moz-transition: all 0.4s ease-out;
    transition: all 0.4s ease-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14 .info {
    background: #333333;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all 0.35s ease-in-out 0.3s;
    -moz-transition: all 0.35s ease-in-out 0.3s;
    transition: all 0.35s ease-in-out 0.3s;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14 .info h3 {
    color: #fff;
    
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect14 a:hover .img {
    opacity: 0;
    visibility: hidden;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14 a:hover .info {
    visibility: visible;
    opacity: 1;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect14.left_to_right .img {
    -webkit-transform: rotateY(0);
    -moz-transform: rotateY(0);
    -ms-transform: rotateY(0);
    -o-transform: rotateY(0);
    transform: rotateY(0);
    -webkit-transform-origin: 100% 50%;
    -moz-transform-origin: 100% 50%;
    -ms-transform-origin: 100% 50%;
    -o-transform-origin: 100% 50%;
    transform-origin: 100% 50%;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14.left_to_right .info {
    -webkit-transform: rotateY(90deg);
    -moz-transform: rotateY(90deg);
    -ms-transform: rotateY(90deg);
    -o-transform: rotateY(90deg);
    transform: rotateY(90deg);
    -webkit-transform-origin: 0% 50%;
    -moz-transform-origin: 0% 50%;
    -ms-transform-origin: 0% 50%;
    -o-transform-origin: 0% 50%;
    transform-origin: 0% 50%;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14.left_to_right a:hover .img {
    -webkit-transform: rotateY(-90deg);
    -moz-transform: rotateY(-90deg);
    -ms-transform: rotateY(-90deg);
    -o-transform: rotateY(-90deg);
    transform: rotateY(-90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14.left_to_right a:hover .info {
    -webkit-transform: rotateY(0);
    -moz-transform: rotateY(0);
    -ms-transform: rotateY(0);
    -o-transform: rotateY(0);
    transform: rotateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect14.right_to_left .img {
    -webkit-transform: rotateY(0);
    -moz-transform: rotateY(0);
    -ms-transform: rotateY(0);
    -o-transform: rotateY(0);
    transform: rotateY(0);
    -webkit-transform-origin: 0% 50%;
    -moz-transform-origin: 0% 50%;
    -ms-transform-origin: 0% 50%;
    -o-transform-origin: 0% 50%;
    transform-origin: 0% 50%;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14.right_to_left .info {
    -webkit-transform: rotateY(-90deg);
    -moz-transform: rotateY(-90deg);
    -ms-transform: rotateY(-90deg);
    -o-transform: rotateY(-90deg);
    transform: rotateY(-90deg);
    -webkit-transform-origin: 100% 50%;
    -moz-transform-origin: 100% 50%;
    -ms-transform-origin: 100% 50%;
    -o-transform-origin: 100% 50%;
    transform-origin: 100% 50%;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14.right_to_left a:hover .img {
    -webkit-transform: rotateY(90deg);
    -moz-transform: rotateY(90deg);
    -ms-transform: rotateY(90deg);
    -o-transform: rotateY(90deg);
    transform: rotateY(90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14.right_to_left a:hover .info {
    -webkit-transform: rotateY(0);
    -moz-transform: rotateY(0);
    -ms-transform: rotateY(0);
    -o-transform: rotateY(0);
    transform: rotateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect14.top_to_bottom .img {
    -webkit-transform: rotateX(0);
    -moz-transform: rotateX(0);
    -ms-transform: rotateX(0);
    -o-transform: rotateX(0);
    transform: rotateX(0);
    -webkit-transform-origin: 50% 100%;
    -moz-transform-origin: 50% 100%;
    -ms-transform-origin: 50% 100%;
    -o-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14.top_to_bottom .info {
    -webkit-transform: rotateX(-90deg);
    -moz-transform: rotateX(-90deg);
    -ms-transform: rotateX(-90deg);
    -o-transform: rotateX(-90deg);
    transform: rotateX(-90deg);
    -webkit-transform-origin: 50% 0;
    -moz-transform-origin: 50% 0;
    -ms-transform-origin: 50% 0;
    -o-transform-origin: 50% 0;
    transform-origin: 50% 0;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14.top_to_bottom a:hover .img {
    -webkit-transform: rotateX(90deg);
    -moz-transform: rotateX(90deg);
    -ms-transform: rotateX(90deg);
    -o-transform: rotateX(90deg);
    transform: rotateX(90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14.top_to_bottom a:hover .info {
    -webkit-transform: rotateX(0);
    -moz-transform: rotateX(0);
    -ms-transform: rotateX(0);
    -o-transform: rotateX(0);
    transform: rotateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect14.bottom_to_top .img {
    -webkit-transform: rotateX(0);
    -moz-transform: rotateX(0);
    -ms-transform: rotateX(0);
    -o-transform: rotateX(0);
    transform: rotateX(0);
    -webkit-transform-origin: 50% 0;
    -moz-transform-origin: 50% 0;
    -ms-transform-origin: 50% 0;
    -o-transform-origin: 50% 0;
    transform-origin: 50% 0;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14.bottom_to_top .info {
    -webkit-transform: rotateX(90deg);
    -moz-transform: rotateX(90deg);
    -ms-transform: rotateX(90deg);
    -o-transform: rotateX(90deg);
    transform: rotateX(90deg);
    -webkit-transform-origin: 50% 100%;
    -moz-transform-origin: 50% 100%;
    -ms-transform-origin: 50% 100%;
    -o-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14.bottom_to_top a:hover .img {
    -webkit-transform: rotateX(-90deg);
    -moz-transform: rotateX(-90deg);
    -ms-transform: rotateX(-90deg);
    -o-transform: rotateX(-90deg);
    transform: rotateX(-90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect14.bottom_to_top a:hover .info {
    -webkit-transform: rotateX(0);
    -moz-transform: rotateX(0);
    -ms-transform: rotateX(0);
    -o-transform: rotateX(0);
    transform: rotateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect15 .img {
    opacity: 1;
    visibility: visible;
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect15.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect15 .info {
    background: #333333;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: scale(0.5) rotate(-720deg);
    -moz-transform: scale(0.5) rotate(-720deg);
    -ms-transform: scale(0.5) rotate(-720deg);
    -o-transform: scale(0.5) rotate(-720deg);
    transform: scale(0.5) rotate(-720deg);
    -webkit-transition: all 0.35s ease-in-out 0.3s;
    -moz-transition: all 0.35s ease-in-out 0.3s;
    transition: all 0.35s ease-in-out 0.3s;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect15 .info h3 {
    color: #fff;
    
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect15 a:hover .img {
    opacity: 0;
    visibility: hidden;
    -webkit-transform: scale(0.5) rotate(720deg);
    -moz-transform: scale(0.5) rotate(720deg);
    -ms-transform: scale(0.5) rotate(720deg);
    -o-transform: scale(0.5) rotate(720deg);
    transform: scale(0.5) rotate(720deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect15 a:hover .info {
    opacity: 1;
    visibility: visible;
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect16 .img {
    z-index: 11;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect16.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect16 .info {
    background: #333333;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect16 .info h3 {
    color: #fff;
    
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect16.left_to_right .img {
    -webkit-transform-origin: 95% 40%;
    -moz-transform-origin: 95% 40%;
    -ms-transform-origin: 95% 40%;
    -o-transform-origin: 95% 40%;
    transform-origin: 95% 40%;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect16.left_to_right .img:after {
    content: '';
    width: 8px;
    height: 8px;
    position: absolute;
    border-radius: <?php echo $border_radius; ?>%;
    top: 40%;
    left: 95%;
    margin: -4px 0 0 -4px;
    background: rgba(0, 0, 0, 0.8);
    box-shadow: 0 0 1px rgba(255, 255, 255, 0.9);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect16.left_to_right a:hover .img {
    -webkit-transform: rotate(-120deg);
    -moz-transform: rotate(-120deg);
    -ms-transform: rotate(-120deg);
    -o-transform: rotate(-120deg);
    transform: rotate(-120deg);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect16.right_to_left .img {
    -webkit-transform-origin: 5% 40%;
    -moz-transform-origin: 5% 40%;
    -ms-transform-origin: 5% 40%;
    -o-transform-origin: 5% 40%;
    transform-origin: 5% 40%;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect16.right_to_left .img:after {
    content: '';
    width: 8px;
    height: 8px;
    position: absolute;
    border-radius: <?php echo $border_radius; ?>%;
    top: 40%;
    left: 5%;
    margin: -4px 0 0 -4px;
    background: rgba(0, 0, 0, 0.8);
    box-shadow: 0 0 1px rgba(255, 255, 255, 0.9);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect16.right_to_left a:hover .img {
    -webkit-transform: rotate(120deg);
    -moz-transform: rotate(120deg);
    -ms-transform: rotate(120deg);
    -o-transform: rotate(120deg);
    transform: rotate(120deg);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect17 .info {
    opacity: 0;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect17 .info h3 {
    color: #fff;
    
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect17 a:hover .img:before {
    box-shadow: inset 0 0 0 110px #333333, inset 0 0 0 16px rgba(255, 255, 255, 0.8), 0 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: inset 0 0 0 110px rgba(0, 0, 0, 0.6), inset 0 0 0 16px rgba(255, 255, 255, 0.8), 0 1px 2px rgba(0, 0, 0, 0.1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect17 a:hover .info {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect17 a:hover .info p {
    opacity: 1;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect17.colored a:hover .img:before {
    box-shadow: inset 0 0 0 110px #1a4a72, inset 0 0 0 16px rgba(255, 255, 255, 0.8), 0 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: inset 0 0 0 500px rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 0.6), inset 0 0 0 16px rgba(255, 255, 255, 0.8), 0 1px 2px rgba(0, 0, 0, 0.1);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect18 {
    -webkit-perspective: 900px;
    -moz-perspective: 900px;
    perspective: 900px;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect18 .img {
    z-index: 11;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect18.colored .info .info-back {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect18 .info {
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    -o-transform-style: preserve-3d;
    transform-style: preserve-3d;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect18 .info .info-back {
    opacity: 1;
    border-radius: <?php echo $border_radius; ?>%;
    width: 100%;
    height: 100%;
    background: #333333;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect18 .info h3 {
    color: #fff;
    
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect18.bottom_to_top .img {
    -webkit-transform-origin: 50% 0;
    -moz-transform-origin: 50% 0;
    -ms-transform-origin: 50% 0;
    -o-transform-origin: 50% 0;
    transform-origin: 50% 0;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect18.bottom_to_top a:hover .img {
    -webkit-transform: rotate3d(1, 0, 0, 180deg);
    -moz-transform: rotate3d(1, 0, 0, 180deg);
    -ms-transform: rotate3d(1, 0, 0, 180deg);
    -o-transform: rotate3d(1, 0, 0, 180deg);
    transform: rotate3d(1, 0, 0, 180deg);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect18.top_to_bottom .img {
    -webkit-transform-origin: 50% 100%;
    -moz-transform-origin: 50% 100%;
    -ms-transform-origin: 50% 100%;
    -o-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect18.top_to_bottom a:hover .img {
    -webkit-transform: rotate3d(1, 0, 0, -180deg);
    -moz-transform: rotate3d(1, 0, 0, -180deg);
    -ms-transform: rotate3d(1, 0, 0, -180deg);
    -o-transform: rotate3d(1, 0, 0, -180deg);
    transform: rotate3d(1, 0, 0, -180deg);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect18.left_to_right .img {
    -webkit-transform-origin: 100% 50%;
    -moz-transform-origin: 100% 50%;
    -ms-transform-origin: 100% 50%;
    -o-transform-origin: 100% 50%;
    transform-origin: 100% 50%;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect18.left_to_right a:hover .img {
    -webkit-transform: rotate3d(0, 1, 0, 180deg);
    -moz-transform: rotate3d(0, 1, 0, 180deg);
    -ms-transform: rotate3d(0, 1, 0, 180deg);
    -o-transform: rotate3d(0, 1, 0, 180deg);
    transform: rotate3d(0, 1, 0, 180deg);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect18.right_to_left .img {
    -webkit-transform-origin: 0% 50%;
    -moz-transform-origin: 0% 50%;
    -ms-transform-origin: 0% 50%;
    -o-transform-origin: 0% 50%;
    transform-origin: 0% 50%;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect18.right_to_left a:hover .img {
    -webkit-transform: rotate3d(0, 1, 0, -180deg);
    -moz-transform: rotate3d(0, 1, 0, -180deg);
    -ms-transform: rotate3d(0, 1, 0, -180deg);
    -o-transform: rotate3d(0, 1, 0, -180deg);
    transform: rotate3d(0, 1, 0, -180deg);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect19.colored .info {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect19 .info {
    background: #333333;
    background: rgba(0, 0, 0, 0.6);
    opacity: 0;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect19 .info h3 {
    color: #fff;
    
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 140px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect19 a:hover .info {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect20 {
    -webkit-perspective: 900px;
    -moz-perspective: 900px;
    perspective: 900px;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect20 .img {
    -webkit-transition: all 0.35s linear;
    -moz-transition: all 0.35s linear;
    transition: all 0.35s linear;
    -webkit-transform-origin: 50% 0%;
    -moz-transform-origin: 50% 0%;
    -ms-transform-origin: 50% 0%;
    -o-transform-origin: 50% 0%;
    transform-origin: 50% 0%;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect20.colored .info .info-back {
    background: rgba(<?php echo $img_bg_color['red'];?>,<?php echo $img_bg_color['green']?>,<?php echo $img_bg_color['blue']?>, 1);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect20 .info {
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    -o-transform-style: preserve-3d;
    transform-style: preserve-3d;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect20 .info .info-back {
    opacity: 1;
    visibility: hidden;
    border-radius: <?php echo $border_radius; ?>%;
    width: 100%;
    height: 100%;
    background: #333333;
    -webkit-transition: all 0.35s linear;
    -moz-transition: all 0.35s linear;
    transition: all 0.35s linear;
    -webkit-transform-origin: 50% 0%;
    -moz-transform-origin: 50% 0%;
    -ms-transform-origin: 50% 0%;
    -o-transform-origin: 50% 0%;
    transform-origin: 50% 0%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect20 .info h3 {
    color: #fff;
    
    position: relative;
    letter-spacing: 2px;
    font-size: <?php echo $font_size ?>px;
    margin: 0 30px;
    padding: 20% 0 0 0;
    height: 110px;
    text-shadow: 0 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.3);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect20 .info p {
    color: #bbb;
    padding: 10px 5px;
    font-style: italic;
    margin: 0 30px;
    font-size: 12px;
    border-top: 1px solid rgba(255, 255, 255, 0.5);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect20 a:hover .img {
    opacity: 0;
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect20 a:hover .info .info-back {
    opacity: 1;
    visibility: visible;
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect20.top_to_bottom .info .info-back {
    -webkit-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
    -moz-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
    -ms-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
    -o-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
    transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect20.top_to_bottom a:hover .img {
    -webkit-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
    -moz-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
    -ms-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
    -o-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
    transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect20.top_to_bottom a:hover .info .info-back {
    -webkit-transform: rotate3d(1, 0, 0, 0deg);
    -moz-transform: rotate3d(1, 0, 0, 0deg);
    -ms-transform: rotate3d(1, 0, 0, 0deg);
    -o-transform: rotate3d(1, 0, 0, 0deg);
    transform: rotate3d(1, 0, 0, 0deg);
}

.item-hover-<?php echo $PGP_Id;?>.circle.effect20.bottom_to_top .info .info-back {
    -webkit-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
    -moz-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
    -ms-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
    -o-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
    transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect20.bottom_to_top a:hover .img {
    -webkit-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
    -moz-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
    -ms-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
    -o-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
    transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
}
.item-hover-<?php echo $PGP_Id;?>.circle.effect20.bottom_to_top a:hover .info .info-back {
    -webkit-transform: rotate3d(1, 0, 0, 0deg);
    -moz-transform: rotate3d(1, 0, 0, 0deg);
    -ms-transform: rotate3d(1, 0, 0, 0deg);
    -o-transform: rotate3d(1, 0, 0, 0deg);
    transform: rotate3d(1, 0, 0, 0deg);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect1 {
    overflow: hidden;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect1.colored .info {
    background: rgba(118, 185, 215, 1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect1 .img {
    z-index: 11;
    position: absolute;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect1 .info {
    background: #333333;
    visibility: hidden;
    opacity: 0;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect1 a:hover .info {
    visibility: visible;
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect1.left_and_right .info h3 {
    position: absolute;
    top: 12px;
    left: 12px;
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    margin: 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect1.left_and_right .info p {
    position: absolute;
    right: 12px;
    bottom: 12px;
    margin: 0;
    font-style: italic;
    font-size: 12px;
    color: #bbb;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect1.left_and_right a:hover .img {
    -webkit-transform: scale(0.6);
    -moz-transform: scale(0.6);
    -ms-transform: scale(0.6);
    -o-transform: scale(0.6);
    transform: scale(0.6);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect1.top_to_bottom .info h3 {
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px 10px 0 4px;
    margin: 10px 0 0 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect1.top_to_bottom .info p {
    font-style: italic;
    font-size: 12px;
    color: #bbb;
    padding: 5px;
    text-align: center;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect1.top_to_bottom a:hover .img {
    -webkit-transform: translateY(30px) scale(0.6);
    -moz-transform: translateY(30px) scale(0.6);
    -ms-transform: translateY(30px) scale(0.6);
    -o-transform: translateY(30px) scale(0.6);
    transform: translateY(30px) scale(0.6);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect1.bottom_to_top .info h3 {
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px 10px 0 4px;
    margin: 134px 0 0 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect1.bottom_to_top .info p {
    font-style: italic;
    font-size: 12px;
    color: #bbb;
    padding: 5px;
    text-align: center;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect1.bottom_to_top a:hover .img {
    -webkit-transform: translateY(-30px) scale(0.6);
    -moz-transform: translateY(-30px) scale(0.6);
    -ms-transform: translateY(-30px) scale(0.6);
    -o-transform: translateY(-30px) scale(0.6);
    transform: translateY(-30px) scale(0.6);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect2 {
    overflow: hidden;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect2.colored .info {
    background: rgba(118, 185, 215, 1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect2.colored .info h3 {
    background: rgba(12, 34, 52, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect2 .img {
    opacity: 1;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-transform: rotate(0deg) scale(1);
    -moz-transform: rotate(0deg) scale(1);
    -ms-transform: rotate(0deg) scale(1);
    -o-transform: rotate(0deg) scale(1);
    transform: rotate(0deg) scale(1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect2 .info {
    background: #333333;
    visibility: hidden;
    -webkit-transition: all 0.35s 0.3s ease-in-out;
    -moz-transition: all 0.35s 0.3s ease-in-out;
    transition: all 0.35s 0.3s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect2 .info h3 {
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    background: #111111;
    margin: 30px 0 0 0;
    -webkit-transform: translateY(-200px);
    -moz-transform: translateY(-200px);
    -ms-transform: translateY(-200px);
    -o-transform: translateY(-200px);
    transform: translateY(-200px);
    -webkit-transition: all 0.35s 0.6s ease-in-out;
    -moz-transition: all 0.35s 0.6s ease-in-out;
    transition: all 0.35s 0.6s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect2 .info p {
    font-style: italic;
    font-size: 12px;
    position: relative;
    color: #bbb;
    padding: 20px 20px 20px;
    text-align: center;
    -webkit-transform: translateY(-200px);
    -moz-transform: translateY(-200px);
    -ms-transform: translateY(-200px);
    -o-transform: translateY(-200px);
    transform: translateY(-200px);
    -webkit-transition: all 0.35s 0.5s linear;
    -moz-transition: all 0.35s 0.5s linear;
    transition: all 0.35s 0.5s linear;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect2 a:hover .img {
    -webkit-transform: rotate(720deg) scale(0);
    -moz-transform: rotate(720deg) scale(0);
    -ms-transform: rotate(720deg) scale(0);
    -o-transform: rotate(720deg) scale(0);
    transform: rotate(720deg) scale(0);
    opacity: 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect2 a:hover .info {
    visibility: visible;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect2 a:hover .info h3,
.item-hover-<?php echo $PGP_Id;?>.square.effect2 a:hover .info p {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect3 {
    overflow: hidden;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect3.colored .info {
    background: rgba(118, 185, 215, 1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect3 .img {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect3 .info {
    height: 65px;
    background: #333333;
    opacity: 0;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect3 .info h3 {
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px 10px 0 4px;
    margin: 4px 0 0 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect3 .info p {
    font-style: italic;
    font-size: 12px;
    position: relative;
    color: #bbb;
    padding: 5px;
    text-align: center;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect3 a:hover .info {
    visibility: visible;
    opacity: 1;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect3.bottom_to_top .info {
    top: auto;
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect3.bottom_to_top a:hover .img {
    -webkit-transform: translateY(-50px);
    -moz-transform: translateY(-50px);
    -ms-transform: translateY(-50px);
    -o-transform: translateY(-50px);
    transform: translateY(-50px);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect3.bottom_to_top a:hover .info {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect3.top_to_bottom .info {
    bottom: auto;
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect3.top_to_bottom a:hover .img {
    -webkit-transform: translateY(50px);
    -moz-transform: translateY(50px);
    -ms-transform: translateY(50px);
    -o-transform: translateY(50px);
    transform: translateY(50px);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect3.top_to_bottom a:hover .info {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect4 {
    overflow: hidden;
    position: relative;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect4.colored .info {
    background: rgba(12, 34, 52, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect4.colored .mask1,
.item-hover-<?php echo $PGP_Id;?>.square.effect4.colored .mask2 {
    background: rgba(118, 185, 215, 0.60);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect4 .img {
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect4 .mask1,
.item-hover-<?php echo $PGP_Id;?>.square.effect4 .mask2 {
    position: absolute;
    background: #333333;
    background: rgba(0, 0, 0, 0.6);
    height: 361px;
    width: 361px;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect4 .mask1 {
    left: auto;
    right: 0;
    top: 0;
    -webkit-transform: rotate(56.5deg) translateX(-180px);
    -moz-transform: rotate(56.5deg) translateX(-180px);
    -ms-transform: rotate(56.5deg) translateX(-180px);
    -o-transform: rotate(56.5deg) translateX(-180px);
    transform: rotate(56.5deg) translateX(-180px);
    -webkit-transform-origin: 100% 0%;
    -moz-transform-origin: 100% 0%;
    -ms-transform-origin: 100% 0%;
    -o-transform-origin: 100% 0%;
    transform-origin: 100% 0%;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect4 .mask2 {
    top: auto;
    bottom: 0;
    left: 0;
    -webkit-transform: rotate(56.5deg) translateX(180px);
    -moz-transform: rotate(56.5deg) translateX(180px);
    -ms-transform: rotate(56.5deg) translateX(180px);
    -o-transform: rotate(56.5deg) translateX(180px);
    transform: rotate(56.5deg) translateX(180px);
    -webkit-transform-origin: 0% 100%;
    -moz-transform-origin: 0% 100%;
    -ms-transform-origin: 0% 100%;
    -o-transform-origin: 0% 100%;
    transform-origin: 0% 100%;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect4 .info {
    background: #111111;
    height: 0;
    visibility: hidden;
    width: 361px;
    -webkit-transform: rotate(-33.5deg) translate(-112px, 166px);
    -moz-transform: rotate(-33.5deg) translate(-112px, 166px);
    -ms-transform: rotate(-33.5deg) translate(-112px, 166px);
    -o-transform: rotate(-33.5deg) translate(-112px, 166px);
    transform: rotate(-33.5deg) translate(-112px, 166px);
    -webkit-transform-origin: 0% 100%;
    -moz-transform-origin: 0% 100%;
    -ms-transform-origin: 0% 100%;
    -o-transform-origin: 0% 100%;
    transform-origin: 0% 100%;
    -webkit-transition: all 0.35s ease-in-out 0.35s;
    -moz-transition: all 0.35s ease-in-out 0.35s;
    transition: all 0.35s ease-in-out 0.35s;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect4 .info h3 {
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    background: transparent;
    margin-top: 5px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    opacity: 0;
    -webkit-transition: all 0.35s ease-in-out 0.35s;
    -moz-transition: all 0.35s ease-in-out 0.35s;
    transition: all 0.35s ease-in-out 0.35s;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect4 .info p {
    font-style: italic;
    font-size: 12px;
    position: relative;
    color: #bbb;
    padding: 20px 20px 20px;
    text-align: center;
    opacity: 0;
    -webkit-transition: all 0.35s ease-in-out 0.35s;
    -moz-transition: all 0.35s ease-in-out 0.35s;
    transition: all 0.35s ease-in-out 0.35s;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect4 a:hover .mask1 {
    -webkit-transform: rotate(56.5deg) translateX(1px);
    -moz-transform: rotate(56.5deg) translateX(1px);
    -ms-transform: rotate(56.5deg) translateX(1px);
    -o-transform: rotate(56.5deg) translateX(1px);
    transform: rotate(56.5deg) translateX(1px);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect4 a:hover .mask2 {
    -webkit-transform: rotate(56.5deg) translateX(-1px);
    -moz-transform: rotate(56.5deg) translateX(-1px);
    -ms-transform: rotate(56.5deg) translateX(-1px);
    -o-transform: rotate(56.5deg) translateX(-1px);
    transform: rotate(56.5deg) translateX(-1px);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect4 a:hover .info {
    width: 300px;
    height: 120px;
    visibility: visible;
    top: 40px;
    -webkit-transform: rotate(0deg) translate(0, 0);
    -moz-transform: rotate(0deg) translate(0, 0);
    -ms-transform: rotate(0deg) translate(0, 0);
    -o-transform: rotate(0deg) translate(0, 0);
    transform: rotate(0deg) translate(0, 0);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect4 a:hover .info h3,
.item-hover-<?php echo $PGP_Id;?>.square.effect4 a:hover .info p {
    opacity: 1;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect5.colored .info {
    background: rgba(118, 185, 215, 1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect5.colored .info h3 {
    background: rgba(12, 34, 52, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect5 .img {
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect5 .info {
    background: #333333;
    opacity: 0;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect5 .info h3 {
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    background: #111111;
    margin: 30px 0 0 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect5 .info p {
    font-style: italic;
    font-size: 12px;
    position: relative;
    color: #bbb;
    padding: 20px 20px 20px;
    text-align: center;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect5 a:hover .img {
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
    -webkit-transition-delay: 0;
    -moz-transition-delay: 0;
    transition-delay: 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect5 a:hover .info {
    visibility: visible;
    opacity: 1;
    -webkit-transform: scale(1) rotate(0deg);
    -moz-transform: scale(1) rotate(0deg);
    -ms-transform: scale(1) rotate(0deg);
    -o-transform: scale(1) rotate(0deg);
    transform: scale(1) rotate(0deg);
    -webkit-transition-delay: 0.3s;
    -moz-transition-delay: 0.3s;
    transition-delay: 0.3s;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect5.left_to_right .info {
    -webkit-transform: scale(0) rotate(-180deg);
    -moz-transform: scale(0) rotate(-180deg);
    -ms-transform: scale(0) rotate(-180deg);
    -o-transform: scale(0) rotate(-180deg);
    transform: scale(0) rotate(-180deg);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect5.right_to_left .info {
    -webkit-transform: scale(0) rotate(180deg);
    -moz-transform: scale(0) rotate(180deg);
    -ms-transform: scale(0) rotate(180deg);
    -o-transform: scale(0) rotate(180deg);
    transform: scale(0) rotate(180deg);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect6 {
    overflow: hidden;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6.colored .info {
    background: rgba(118, 185, 215, 0.60);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6.colored .info h3 {
    background: rgba(12, 34, 52, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6 .img {
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6 .info {
    background: #333333;
    background: rgba(0, 0, 0, 0.6);
    visibility: hidden;
    opacity: 0;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6 .info h3 {
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    background: #111111;
    margin: 30px 0 0 0;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6 .info p {
    font-style: italic;
    font-size: 12px;
    position: relative;
    color: #bbb;
    padding: 20px 20px 20px;
    text-align: center;
    -webkit-transition: all 0.35s 0.1s linear;
    -moz-transition: all 0.35s 0.1s linear;
    transition: all 0.35s 0.1s linear;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6 a:hover .img {
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -ms-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6 a:hover .info {
    visibility: visible;
    opacity: 1;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect6.from_top_and_bottom .info h3 {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6.from_top_and_bottom .info p {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6.from_top_and_bottom a:hover .info h3,
.item-hover-<?php echo $PGP_Id;?>.square.effect6.from_top_and_bottom a:hover .info p {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect6.from_left_and_right .info h3 {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6.from_left_and_right .info p {
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6.from_left_and_right a:hover .info h3,
.item-hover-<?php echo $PGP_Id;?>.square.effect6.from_left_and_right a:hover .info p {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect6.top_to_bottom .info h3 {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6.top_to_bottom .info p {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6.top_to_bottom a:hover .info h3,
.item-hover-<?php echo $PGP_Id;?>.square.effect6.top_to_bottom a:hover .info p {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect6.bottom_to_top .info h3 {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6.bottom_to_top .info p {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect6.bottom_to_top a:hover .info h3,
.item-hover-<?php echo $PGP_Id;?>.square.effect6.bottom_to_top a:hover .info p {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect7 {
    overflow: hidden;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect7.colored .info {
    background: rgba(118, 185, 215, 0.60);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect7.colored .info h3 {
    background: rgba(12, 34, 52, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect7 .img {
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect7 .info {
    background: #333333;
    background: rgba(0, 0, 0, 0.6);
    visibility: hidden;
    opacity: 0;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect7 .info h3 {
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    background: #111111;
    margin: 30px 0 0 0;
    -webkit-transform: scale(4);
    -moz-transform: scale(4);
    -ms-transform: scale(4);
    -o-transform: scale(4);
    transform: scale(4);
    -webkit-transition: all 0.35s 0.1s ease-in-out;
    -moz-transition: all 0.35s 0.1s ease-in-out;
    transition: all 0.35s 0.1s ease-in-out;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect7 a:hover .img {
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -ms-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect7 a:hover .info {
    visibility: visible;
    opacity: 1;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect7 a:hover .info h3,
.item-hover-<?php echo $PGP_Id;?>.square.effect7 a:hover .info p {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect8 {
    overflow: hidden;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8.colored .info {
    background: rgba(118, 185, 215, 1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8.colored .info h3 {
    background: rgba(12, 34, 52, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8 .img {
    opacity: 1;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8 .info {
    background: #333333;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8 .info h3 {
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    background: #111111;
    margin: 30px 0 0 0;
    -webkit-transition: all 0.35s 0.1s ease-in-out;
    -moz-transition: all 0.35s 0.1s ease-in-out;
    transition: all 0.35s 0.1s ease-in-out;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect8 a:hover .img {
    opacity: 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8 a:hover .info {
    visibility: visible;
    opacity: 1;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_up .img {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_up .info {
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_up .info h3,
.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_up .info p {
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_up a:hover .img {
    -webkit-transform: scale(5);
    -moz-transform: scale(5);
    -ms-transform: scale(5);
    -o-transform: scale(5);
    transform: scale(5);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_up a:hover .info {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_up a:hover .info h3,
.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_up a:hover .info p {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_down .img {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_down .info {
    -webkit-transform: scale(5);
    -moz-transform: scale(5);
    -ms-transform: scale(5);
    -o-transform: scale(5);
    transform: scale(5);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_down .info h3,
.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_down .info p {
    -webkit-transform: scale(5);
    -moz-transform: scale(5);
    -ms-transform: scale(5);
    -o-transform: scale(5);
    transform: scale(5);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_down a:hover .img {
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_down a:hover .info {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_down a:hover .info h3,
.item-hover-<?php echo $PGP_Id;?>.square.effect8.scale_down a:hover .info p {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect9 {
    -webkit-perspective: 900px;
    -moz-perspective: 900px;
    perspective: 900px;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect9.colored .info .info-back {
    background: rgba(118, 185, 215, 1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect9.colored .info h3 {
    background: rgba(12, 34, 52, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect9 .img {
    position: relative;
    z-index: 11;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect9 .info {
    z-index: 0;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    -o-transform-style: preserve-3d;
    transform-style: preserve-3d;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect9 .info .info-back {
    opacity: 1;
    width: 100%;
    height: 100%;
    padding-top: 30px;
    background: #333333;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect9 .info h3 {
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    background: #111111;
    margin: 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect9 .info p {
    font-style: italic;
    font-size: 12px;
    position: relative;
    color: #bbb;
    padding: 20px 20px 20px;
    text-align: center;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect9.left_to_right .img {
    -webkit-transform-origin: 100% 50%;
    -moz-transform-origin: 100% 50%;
    -ms-transform-origin: 100% 50%;
    -o-transform-origin: 100% 50%;
    transform-origin: 100% 50%;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect9.left_to_right a:hover .img {
    -webkit-transform: rotate3d(0, 1, 0, 180deg);
    -moz-transform: rotate3d(0, 1, 0, 180deg);
    -ms-transform: rotate3d(0, 1, 0, 180deg);
    -o-transform: rotate3d(0, 1, 0, 180deg);
    transform: rotate3d(0, 1, 0, 180deg);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect9.right_to_left .img {
    -webkit-transform-origin: 0% 50%;
    -moz-transform-origin: 0% 50%;
    -ms-transform-origin: 0% 50%;
    -o-transform-origin: 0% 50%;
    transform-origin: 0% 50%;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect9.right_to_left a:hover .img {
    -webkit-transform: rotate3d(0, 1, 0, -180deg);
    -moz-transform: rotate3d(0, 1, 0, -180deg);
    -ms-transform: rotate3d(0, 1, 0, -180deg);
    -o-transform: rotate3d(0, 1, 0, -180deg);
    transform: rotate3d(0, 1, 0, -180deg);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect9.top_to_bottom .img {
    -webkit-transform-origin: 50% 100%;
    -moz-transform-origin: 50% 100%;
    -ms-transform-origin: 50% 100%;
    -o-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect9.top_to_bottom a:hover .img {
    -webkit-transform: rotate3d(1, 0, 0, -180deg);
    -moz-transform: rotate3d(1, 0, 0, -180deg);
    -ms-transform: rotate3d(1, 0, 0, -180deg);
    -o-transform: rotate3d(1, 0, 0, -180deg);
    transform: rotate3d(1, 0, 0, -180deg);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect9.bottom_to_top .img {
    -webkit-transform-origin: 50% 0;
    -moz-transform-origin: 50% 0;
    -ms-transform-origin: 50% 0;
    -o-transform-origin: 50% 0;
    transform-origin: 50% 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect9.bottom_to_top a:hover .img {
    -webkit-transform: rotate3d(1, 0, 0, 180deg);
    -moz-transform: rotate3d(1, 0, 0, 180deg);
    -ms-transform: rotate3d(1, 0, 0, 180deg);
    -o-transform: rotate3d(1, 0, 0, 180deg);
    transform: rotate3d(1, 0, 0, 180deg);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect10 {
    overflow: hidden;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10.colored .info {
    background: rgba(118, 185, 215, 1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10.colored .info h3 {
    background: rgba(12, 34, 52, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10 .img {
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10 .info {
    background: #333333;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10 .info h3 {
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    background: #111111;
    margin: 30px 0 0 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10 .info p {
    font-style: italic;
    font-size: 12px;
    position: relative;
    color: #bbb;
    padding: 20px 20px 20px;
    text-align: center;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10 a:hover .info {
    visibility: visible;
    opacity: 1;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect10.left_to_right .img {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10.left_to_right .info {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10.left_to_right a:hover .img {
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10.left_to_right a:hover .info {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect10.right_to_left .img {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10.right_to_left .info {
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10.right_to_left a:hover .img {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10.right_to_left a:hover .info {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect10.top_to_bottom .img {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10.top_to_bottom .info {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10.top_to_bottom a:hover .img {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10.top_to_bottom a:hover .info {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect10.bottom_to_top .img {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10.bottom_to_top .info {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10.bottom_to_top a:hover .img {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect10.bottom_to_top a:hover .info {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect11 {
    overflow: hidden;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect11.colored .info {
    background: rgb(52, 152, 215);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect11.colored .info h3 {
    background: rgba(12, 34, 52, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect11 .img {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect11 .info {
    background: #333333;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: all 0.35s ease 0.2s;
    -moz-transition: all 0.35s ease 0.2s;
    transition: all 0.35s ease 0.2s;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect11 .info h3 {
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    background: #111111;
    margin: 30px 0 0 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect11 .info p {
    font-style: italic;
    font-size: 12px;
    position: relative;
    color: #bbb;
    padding: 20px 20px 20px;
    text-align: center;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect11 a:hover .img {
    opacity: 0;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect11 a:hover .info {
    visibility: visible;
    opacity: 1;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect11.left_to_right .info {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect11.left_to_right a:hover .info {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect11.right_to_left .info {
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect11.right_to_left a:hover .info {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect11.top_to_bottom .info {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect11.top_to_bottom a:hover .info {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect11.bottom_to_top .info {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect11.bottom_to_top a:hover .info {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect12 {
    overflow: hidden;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.colored .info {
    background: rgba(118, 185, 215, 0.60);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.colored .info h3 {
    background: rgba(12, 34, 52, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12 .img {
    -webkit-transition: all 0.35s ease-in;
    -moz-transition: all 0.35s ease-in;
    transition: all 0.35s ease-in;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12 .info {
    background: #333333;
    background: rgba(0, 0, 0, 0.6);
    visibility: hidden;
    opacity: 0;
    -webkit-transition: all 0.35s ease-in;
    -moz-transition: all 0.35s ease-in;
    transition: all 0.35s ease-in;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12 .info h3 {
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    background: #111111;
    margin: 30px 0 0 0;
    -webkit-transition: all 0.35s ease-in;
    -moz-transition: all 0.35s ease-in;
    transition: all 0.35s ease-in;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12 .info p {
    font-style: italic;
    font-size: 12px;
    position: relative;
    color: #bbb;
    padding: 20px 20px 20px;
    text-align: center;
    -webkit-transition: all 0.35s ease-in;
    -moz-transition: all 0.35s ease-in;
    transition: all 0.35s ease-in;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12 a:hover .info {
    visibility: visible;
    opacity: 1;
    -webkit-transition-delay: 0.2s;
    -moz-transition-delay: 0.2s;
    transition-delay: 0.2s;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12 a:hover .info h3 {
    -webkit-transition-delay: 0.3s;
    -moz-transition-delay: 0.3s;
    transition-delay: 0.3s;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12 a:hover .info p {
    -webkit-transition-delay: 0.25s;
    -moz-transition-delay: 0.25s;
    transition-delay: 0.25s;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect12.left_to_right .info {
    -webkit-transform: translate(-460px, -100px) rotate(-180deg);
    -moz-transform: translate(-460px, -100px) rotate(-180deg);
    -ms-transform: translate(-460px, -100px) rotate(-180deg);
    -o-transform: translate(-460px, -100px) rotate(-180deg);
    transform: translate(-460px, -100px) rotate(-180deg);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.left_to_right .info h3 {
    -webkit-transform: translateY(-100px);
    -moz-transform: translateY(-100px);
    -ms-transform: translateY(-100px);
    -o-transform: translateY(-100px);
    transform: translateY(-100px);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.left_to_right .info p {
    -webkit-transform: translateX(-300px) rotate(-90deg);
    -moz-transform: translateX(-300px) rotate(-90deg);
    -ms-transform: translateX(-300px) rotate(-90deg);
    -o-transform: translateX(-300px) rotate(-90deg);
    transform: translateX(-300px) rotate(-90deg);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.left_to_right a:hover .info {
    -webkit-transform: translate(0px, 0px);
    -moz-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    -o-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.left_to_right a:hover .info h3 {
    -webkit-transform: translateY(0px);
    -moz-transform: translateY(0px);
    -ms-transform: translateY(0px);
    -o-transform: translateY(0px);
    transform: translateY(0px);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.left_to_right a:hover .info p {
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect12.right_to_left .info {
    -webkit-transform: translate(460px, -100px) rotate(180deg);
    -moz-transform: translate(460px, -100px) rotate(180deg);
    -ms-transform: translate(460px, -100px) rotate(180deg);
    -o-transform: translate(460px, -100px) rotate(180deg);
    transform: translate(460px, -100px) rotate(180deg);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.right_to_left .info h3 {
    -webkit-transform: translateY(-100px);
    -moz-transform: translateY(-100px);
    -ms-transform: translateY(-100px);
    -o-transform: translateY(-100px);
    transform: translateY(-100px);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.right_to_left .info p {
    -webkit-transform: translateX(300px) rotate(90deg);
    -moz-transform: translateX(300px) rotate(90deg);
    -ms-transform: translateX(300px) rotate(90deg);
    -o-transform: translateX(300px) rotate(90deg);
    transform: translateX(300px) rotate(90deg);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.right_to_left a:hover .info {
    -webkit-transform: translate(0px, 0px);
    -moz-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    -o-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.right_to_left a:hover .info h3 {
    -webkit-transform: translateY(0px);
    -moz-transform: translateY(0px);
    -ms-transform: translateY(0px);
    -o-transform: translateY(0px);
    transform: translateY(0px);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.right_to_left a:hover .info p {
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect12.top_to_bottom .info {
    -webkit-transform: translate(-265px, -145px) rotate(-45deg);
    -moz-transform: translate(-265px, -145px) rotate(-45deg);
    -ms-transform: translate(-265px, -145px) rotate(-45deg);
    -o-transform: translate(-265px, -145px) rotate(-45deg);
    transform: translate(-265px, -145px) rotate(-45deg);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.top_to_bottom .info h3 {
    -webkit-transform: translate(200px, -200px);
    -moz-transform: translate(200px, -200px);
    -ms-transform: translate(200px, -200px);
    -o-transform: translate(200px, -200px);
    transform: translate(200px, -200px);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.top_to_bottom .info p {
    -webkit-transform: translate(200px, -200px);
    -moz-transform: translate(200px, -200px);
    -ms-transform: translate(200px, -200px);
    -o-transform: translate(200px, -200px);
    transform: translate(200px, -200px);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.top_to_bottom a:hover .info {
    -webkit-transform: translate(0px, 0px);
    -moz-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    -o-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
    -webkit-transition-delay: 0.2s;
    -moz-transition-delay: 0.2s;
    transition-delay: 0.2s;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.top_to_bottom a:hover .info h3 {
    -webkit-transform: translate(0px, 0px);
    -moz-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    -o-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
    -webkit-transition-delay: 0.3s;
    -moz-transition-delay: 0.3s;
    transition-delay: 0.3s;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.top_to_bottom a:hover .info p {
    -webkit-transform: translate(0px, 0px);
    -moz-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    -o-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
    -webkit-transition-delay: 0.4s;
    -moz-transition-delay: 0.4s;
    transition-delay: 0.4s;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect12.bottom_to_top .info {
    -webkit-transform: translate(265px, 145px) rotate(45deg);
    -moz-transform: translate(265px, 145px) rotate(45deg);
    -ms-transform: translate(265px, 145px) rotate(45deg);
    -o-transform: translate(265px, 145px) rotate(45deg);
    transform: translate(265px, 145px) rotate(45deg);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.bottom_to_top .info h3 {
    -webkit-transform: translate(200px, -200px);
    -moz-transform: translate(200px, -200px);
    -ms-transform: translate(200px, -200px);
    -o-transform: translate(200px, -200px);
    transform: translate(200px, -200px);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.bottom_to_top .info p {
    -webkit-transform: translate(-200px, 200px);
    -moz-transform: translate(-200px, 200px);
    -ms-transform: translate(-200px, 200px);
    -o-transform: translate(-200px, 200px);
    transform: translate(-200px, 200px);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.bottom_to_top a:hover .info {
    -webkit-transform: translate(0px, 0px);
    -moz-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    -o-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
    -webkit-transition-delay: 0.2s;
    -moz-transition-delay: 0.2s;
    transition-delay: 0.2s;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.bottom_to_top a:hover .info h3 {
    -webkit-transform: translate(0px, 0px);
    -moz-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    -o-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
    -webkit-transition-delay: 0.3s;
    -moz-transition-delay: 0.3s;
    transition-delay: 0.3s;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect12.bottom_to_top a:hover .info p {
    -webkit-transform: translate(0px, 0px);
    -moz-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    -o-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
    -webkit-transition-delay: 0.4s;
    -moz-transition-delay: 0.4s;
    transition-delay: 0.4s;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect13 {
    overflow: hidden;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect13.colored .info {
    background: rgba(118, 185, 215, 0.60);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect13.colored .info h3 {
    background: rgba(12, 34, 52, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect13 .img {
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect13 .info {
    background: #333333;
    background: rgba(0, 0, 0, 0.6);
    visibility: hidden;
    opacity: 0;
    pointer-events: none;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect13 .info h3 {
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    background: #111111;
    margin: 30px 0 0 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect13 .info p {
    font-style: italic;
    font-size: 12px;
    position: relative;
    color: #bbb;
    padding: 20px 20px 20px;
    text-align: center;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect13 a:hover .img {
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -ms-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect13 a:hover .info {
    visibility: visible;
    opacity: 1;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect13.left_to_right .info {
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect13.left_to_right a:hover .info {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect13.right_to_left .info {
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect13.right_to_left a:hover .info {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect13.top_to_bottom .info {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect13.top_to_bottom a:hover .info {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect13.bottom_to_top .info {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect13.bottom_to_top a:hover .info {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect14.colored .info {
    background: rgba(118, 185, 215, 1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect14.colored .info h3 {
    background: rgba(12, 34, 52, 0.6);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect14 .img {
    opacity: 1;
    -webkit-transition: all 0.35s ease-in-out;
    -moz-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect14 .info {
    background: #333333;
    visibility: hidden;
    opacity: 0;
    pointer-events: none;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
    -webkit-transition: all 0.35s ease 0.2s;
    -moz-transition: all 0.35s ease 0.2s;
    transition: all 0.35s ease 0.2s;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect14 .info h3 {
    
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    background: #111111;
    margin: 30px 0 0 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect14 .info p {
    font-style: italic;
    font-size: 12px;
    position: relative;
    color: #fff;
    padding: 20px 20px 20px;
    text-align: center;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect14 a:hover .img {
    opacity: 0;
    pointer-events: none;
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    -ms-transform: scale(0.5);
    -o-transform: scale(0.5);
    transform: scale(0.5);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect14 a:hover .info {
    visibility: visible;
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect14.left_to_right .img {
    -webkit-transform: translateX(0) rotate(0);
    -moz-transform: translateX(0) rotate(0);
    -ms-transform: translateX(0) rotate(0);
    -o-transform: translateX(0) rotate(0);
    transform: translateX(0) rotate(0);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect14.left_to_right a:hover .img {
    -webkit-transform: translateX(100%) rotate(180deg);
    -moz-transform: translateX(100%) rotate(180deg);
    -ms-transform: translateX(100%) rotate(180deg);
    -o-transform: translateX(100%) rotate(180deg);
    transform: translateX(100%) rotate(180deg);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect14.right_to_left .img {
    -webkit-transform: translateX(0) rotate(0);
    -moz-transform: translateX(0) rotate(0);
    -ms-transform: translateX(0) rotate(0);
    -o-transform: translateX(0) rotate(0);
    transform: translateX(0) rotate(0);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect14.right_to_left a:hover .img {
    -webkit-transform: translateX(-100%) rotate(-180deg);
    -moz-transform: translateX(-100%) rotate(-180deg);
    -ms-transform: translateX(-100%) rotate(-180deg);
    -o-transform: translateX(-100%) rotate(-180deg);
    transform: translateX(-100%) rotate(-180deg);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect14.top_to_bottom .img {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect14.top_to_bottom a:hover .img {
    -webkit-transform: translateY(-100%);
    -moz-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    -o-transform: translateY(-100%);
    transform: translateY(-100%);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect14.bottom_to_top .img {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect14.bottom_to_top a:hover .img {
    -webkit-transform: translateY(100%);
    -moz-transform: translateY(100%);
    -ms-transform: translateY(100%);
    -o-transform: translateY(100%);
    transform: translateY(100%);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect15 {
    overflow: hidden;
    -webkit-perspective: 900px;
    -moz-perspective: 900px;
    perspective: 900px;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15.colored .info {
    background: rgba(118, 185, 215, 1);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15 .img {
    opacity: 1;
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15 .info {
    background: #333333;
    opacity: 0;
    -webkit-transition: all 0.35s ease-in-out 0.3s;
    -moz-transition: all 0.35s ease-in-out 0.3s;
    transition: all 0.35s ease-in-out 0.3s;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15 .info h3 {
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    background: #111111;
    margin: 30px 0 0 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15 .info p {
    font-style: italic;
    font-size: 12px;
    position: relative;
    color: #bbb;
    padding: 20px 20px 20px;
    text-align: center;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15 a:hover .img {
    opacity: 0;
    visibility: hidden;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15 a:hover .info {
    visibility: visible;
    opacity: 1;
}

.item-hover-<?php echo $PGP_Id;?>.square.effect15.left_to_right .img {
    -webkit-transform: rotateY(0);
    -moz-transform: rotateY(0);
    -ms-transform: rotateY(0);
    -o-transform: rotateY(0);
    transform: rotateY(0);
    -webkit-transform-origin: 100% 50%;
    -moz-transform-origin: 100% 50%;
    -ms-transform-origin: 100% 50%;
    -o-transform-origin: 100% 50%;
    transform-origin: 100% 50%;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15.left_to_right .info {
    -webkit-transform: rotateY(90deg);
    -moz-transform: rotateY(90deg);
    -ms-transform: rotateY(90deg);
    -o-transform: rotateY(90deg);
    transform: rotateY(90deg);
    -webkit-transform-origin: 0% 50%;
    -moz-transform-origin: 0% 50%;
    -ms-transform-origin: 0% 50%;
    -o-transform-origin: 0% 50%;
    transform-origin: 0% 50%;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15.left_to_right a:hover .img {
    -webkit-transform: rotateY(-90deg);
    -moz-transform: rotateY(-90deg);
    -ms-transform: rotateY(-90deg);
    -o-transform: rotateY(-90deg);
    transform: rotateY(-90deg);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15.left_to_right a:hover .info {
    -webkit-transform: rotateY(0);
    -moz-transform: rotateY(0);
    -ms-transform: rotateY(0);
    -o-transform: rotateY(0);
    transform: rotateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect15.right_to_left .img {
    -webkit-transform: rotateY(0);
    -moz-transform: rotateY(0);
    -ms-transform: rotateY(0);
    -o-transform: rotateY(0);
    transform: rotateY(0);
    -webkit-transform-origin: 0% 50%;
    -moz-transform-origin: 0% 50%;
    -ms-transform-origin: 0% 50%;
    -o-transform-origin: 0% 50%;
    transform-origin: 0% 50%;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15.right_to_left .info {
    -webkit-transform: rotateY(-90deg);
    -moz-transform: rotateY(-90deg);
    -ms-transform: rotateY(-90deg);
    -o-transform: rotateY(-90deg);
    transform: rotateY(-90deg);
    -webkit-transform-origin: 100% 50%;
    -moz-transform-origin: 100% 50%;
    -ms-transform-origin: 100% 50%;
    -o-transform-origin: 100% 50%;
    transform-origin: 100% 50%;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15.right_to_left a:hover .img {
    -webkit-transform: rotateY(90deg);
    -moz-transform: rotateY(90deg);
    -ms-transform: rotateY(90deg);
    -o-transform: rotateY(90deg);
    transform: rotateY(90deg);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15.right_to_left a:hover .info {
    -webkit-transform: rotateY(0);
    -moz-transform: rotateY(0);
    -ms-transform: rotateY(0);
    -o-transform: rotateY(0);
    transform: rotateY(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect15.top_to_bottom .img {
    -webkit-transform: rotateX(0);
    -moz-transform: rotateX(0);
    -ms-transform: rotateX(0);
    -o-transform: rotateX(0);
    transform: rotateX(0);
    -webkit-transform-origin: 50% 100%;
    -moz-transform-origin: 50% 100%;
    -ms-transform-origin: 50% 100%;
    -o-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15.top_to_bottom .info {
    -webkit-transform: rotateX(-90deg);
    -moz-transform: rotateX(-90deg);
    -ms-transform: rotateX(-90deg);
    -o-transform: rotateX(-90deg);
    transform: rotateX(-90deg);
    -webkit-transform-origin: 50% 0;
    -moz-transform-origin: 50% 0;
    -ms-transform-origin: 50% 0;
    -o-transform-origin: 50% 0;
    transform-origin: 50% 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15.top_to_bottom a:hover .img {
    -webkit-transform: rotateX(90deg);
    -moz-transform: rotateX(90deg);
    -ms-transform: rotateX(90deg);
    -o-transform: rotateX(90deg);
    transform: rotateX(90deg);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15.top_to_bottom a:hover .info {
    -webkit-transform: rotateX(0);
    -moz-transform: rotateX(0);
    -ms-transform: rotateX(0);
    -o-transform: rotateX(0);
    transform: rotateX(0);
}

.item-hover-<?php echo $PGP_Id;?>.square.effect15.bottom_to_top .img {
    -webkit-transform: rotateX(0);
    -moz-transform: rotateX(0);
    -ms-transform: rotateX(0);
    -o-transform: rotateX(0);
    transform: rotateX(0);
    -webkit-transform-origin: 50% 0;
    -moz-transform-origin: 50% 0;
    -ms-transform-origin: 50% 0;
    -o-transform-origin: 50% 0;
    transform-origin: 50% 0;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15.bottom_to_top .info {
    -webkit-transform: rotateX(90deg);
    -moz-transform: rotateX(90deg);
    -ms-transform: rotateX(90deg);
    -o-transform: rotateX(90deg);
    transform: rotateX(90deg);
    -webkit-transform-origin: 50% 100%;
    -moz-transform-origin: 50% 100%;
    -ms-transform-origin: 50% 100%;
    -o-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15.bottom_to_top a:hover .img {
    -webkit-transform: rotateX(-90deg);
    -moz-transform: rotateX(-90deg);
    -ms-transform: rotateX(-90deg);
    -o-transform: rotateX(-90deg);
    transform: rotateX(-90deg);
}
.item-hover-<?php echo $PGP_Id;?>.square.effect15.bottom_to_top a:hover .info {
    -webkit-transform: rotateX(0);
    -moz-transform: rotateX(0);
    -ms-transform: rotateX(0);
    -o-transform: rotateX(0);
    transform: rotateX(0);
}
#fancybox-loading{
display:none !important;
}
</style>