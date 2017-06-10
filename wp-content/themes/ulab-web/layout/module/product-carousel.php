<?php
    $static_uri = get_template_directory_uri();
    $product_arr = array(
        'udm-series' => array(
            'udm-action.png' => 'http://www.udongman.cn/index.php?m=product&c=csa', //优动漫
            'udm-coordinate.png' => 'http://www.udongman.cn/index.php?m=product&c=csc', //优动漫
            'udm-modeler.png' => 'http://www.udongman.cn/index.php?m=product&c=modeler', //优动漫
            'udm-paint.png' => 'http://www.udongman.cn/index.php?m=product&c=csp', //优动漫
        ),
        'caricature' => array(
            'youman.png' => 'http://www.udongman.cn/index.php?m=product&c=youman', //漫画
            'youhui.png' => 'http://www.udongman.cn/index.php?m=product&c=youhui', //漫画
        ),
        'cartoon' => array(
            'ratas-master.png' => 'http://www.udongman.cn/index.php?m=product&c=retas', //动画
        ),
        'paint-assistant' => array(
            'paint-assistant.png' => 'http://www.udongman.cn/index.php?m=product&c=paintaid', //辅助
        ),
        'hardware' => array(
            'qumarion.png' => 'http://www.udongman.cn/index.php?m=product&c=quma', //硬件
            'handler.png' => 'http://www.udongman.cn/index.php?m=product&c=tabmate', //硬件
        ),
    );

    $base_url = $static_uri . '/public/img/product/';
?>
<!--产品介绍展示-->
<div class="sections swiper-slide">
    <div class="product-list-container">
    	<div class="nav-product">
	        <ul class="nav-wrapper">
	            <li class="nav-tab">
	            	<div class="nav-link active" data-cat="udm-series">优动漫系列</div>
            	</li>
	            <li class="nav-tab">
	            	<div class="nav-link" data-cat="caricature">漫画插画系列</div>
            	</li>
	            <li class="nav-tab">
	            	<div class="nav-link" data-cat="cartoon">动画系列</div>
            	</li>
	            <li class="nav-tab">
	            	<div class="nav-link" data-cat="paint-assistant">绘画辅助系列</div>
            	</li>
	            <li class="nav-tab">
	            	<div class="nav-link" data-cat="hardware">硬件</div>
            	</li>
	        </ul>
    	</div>
        <div class="product-content">
            <?php
                $i = 0;
                foreach ($product_arr as $series => $product) {
            ?>
                    <div class="content-wrap" data-series="<?php echo $series; ?>">
                        <div class="content-group">
                            <?php
                                foreach ($product as $img => $link) {
                                    ?>
                                    <a class="item" href="<?php echo $link;?>" alt="paint">
                                        <img class="item-img" src="<?php echo $base_url . $img; ?>">
                                    </a>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>
<!--产品介绍展示end-->