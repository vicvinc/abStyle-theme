<?php
add_shortcode( 'PGP', 'PhotoGalleryPluginShortCode' );
function PhotoGalleryPluginShortCode( $Id ) {
    ob_start();
	
	/**
	 * Hex to Rgb color code function
	 */
	require_once("pgp_rgb_color_code_function.php");
	
	/**
	 * Load All Image Gallery Custom Post Type
	 */
	$CPT_Name = "pgp_gallery";
	$AllGalleries = array( 'p' => $Id['id'], 'post_type' => $CPT_Name, 'orderby' => 'ASC');
	$loop = new WP_Query( $AllGalleries );

	while ( $loop->have_posts() ) : $loop->the_post();
	
		/**
		 * Load Saved Photo Gallery Pro Settings
		 */

		if(!isset($AllGalleries['p'])) {
			$AllGalleries['p'] = "";		
		} else {
			$PGP_Id = $AllGalleries['p'];
			$PGP_Gallery_Settings = "PGP_Gallery_Settings_".$PGP_Id;
			$PGP_Gallery_Settings = unserialize(get_post_meta( $PGP_Id, $PGP_Gallery_Settings, true));
			if(count($PGP_Gallery_Settings)) {
				$PGP_Effect  			= $PGP_Gallery_Settings['PGP_Effect'];
				$PGP_Effect_animation		= $PGP_Gallery_Settings['PGP_Effect_animation'];
				$PGP_Show_Gallery_Title		= $PGP_Gallery_Settings['PGP_Show_Gallery_Title'];
				$PGP_Show_Image_Label		= $PGP_Gallery_Settings['PGP_Show_Image_Label'];
				$PGP_Gallery_Layout		= $PGP_Gallery_Settings['PGP_Gallery_Layout'];
				$PGP_Open_Link			= $PGP_Gallery_Settings['PGP_Open_Link'];
				$PGP_Color 			= $PGP_Gallery_Settings['PGP_Color'];
				$PGP_Font_Style			= $PGP_Gallery_Settings['PGP_Font_Style'];
				$PGP_Light_Box			= $PGP_Gallery_Settings['PGP_Light_Box'];
				$PGP_Image_Border		= $PGP_Gallery_Settings['PGP_Image_Border'];
				$PGP_Custom_CSS			= $PGP_Gallery_Settings['PGP_Custom_CSS'];
			}
		}
		?>
			<!-- Swipe Box-->
			<script type="text/javascript">
				jQuery(document).ready(function(){
					;( function( jQuery ) {
						jQuery( '.swipebox_<?php echo $PGP_Id; ?>' ).swipebox({
							hideBarsDelay:0,
							hideCloseButtonOnMobile : false,
						});
					})( jQuery );
				});
			</script>
			<?php 
			
		$img_bg_color =  PGP_hex2rgb( $PGP_Color );
		
		// Image Label String Length Corp
		if($PGP_Gallery_Layout=="col-md-6"){
			$str_lenght = 40;
		}
		else{
			$str_lenght = 40;
		}
		?>
		<style>
			.pgp_effect{
				overflow: hidden;
				paddind:10px;
			}
			.item_margin{
				margin-bottom:20px;
			}
			.info .h3-<?php echo $PGP_Id;?>{
				font-family: <?php echo $PGP_Font_Style; ?>;
				font-weight: 500;
			}
			.portfolio-gallery-title{
				font-weight: bold;font-size:18px;padding-bottom:20px; border-bottom:3px solid #f1f1f1; margin-bottom: 20px; text-align:center
			}
			.pp_nav {
				display: block !important;
			}
			
			@media (min-width: 992px){
				.col-md-6 {
					width: 49.57% !important;
				}
				.col-md-4 {
					width: 33.30% !important;
				}
				.col-md-3 {
					width: 24.70% !important;
				}
			}
		</style>

		<!-- Load Effect File -->
		<?php include('css/ohover.php'); ?>

		<!-- Custom Css -->
		<style>
		<?php echo $PGP_Custom_CSS; ?>
		</style>

		<div class="pgp_effect">
			<?php if($PGP_Show_Gallery_Title=="yes"){?>
			<div class="portfolio-gallery-title">
				<?php echo get_the_title($PGP_Id);?>
			</div>
			<?php } ?>
			<div class="row gallery1">
				<?php
				$PGP_AllPhotosDetails = unserialize(get_post_meta( $PGP_Id, 'PGP_all_photos_details', true));
				$TotalImages =  get_post_meta( $PGP_Id, 'PGP_total_images_count', true );
				if($TotalImages) {
					foreach($PGP_AllPhotosDetails as $PGP_SinglePhotoDetails)
					{
						$name = $PGP_SinglePhotoDetails['PGP_image_label'];
						$UniqueString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
						$url = $PGP_SinglePhotoDetails['PGP_image_url'];
						$url1 = $PGP_SinglePhotoDetails['PGP_gallery_admin_thumb'];
						$url2 = $PGP_SinglePhotoDetails['PGP_gallery_admin_medium'];
						$circle = $PGP_SinglePhotoDetails['PGP_gallery_admin_circle'];
						$video = $PGP_SinglePhotoDetails['PGP_video_link']; 
						$link = $PGP_SinglePhotoDetails['PGP_external_link'];
						$type = $PGP_SinglePhotoDetails['PGP_portfolio_type'];
						if($type=="image")
						{
							$href_link = $url;
						}
						elseif($type=="link"){
							$href_link = $link;
						}
						else{
							$href_link = $video;
						}
						?>
						<div class="<?php echo $PGP_Gallery_Layout; ?> item_margin col-sm-6">
						  <!-- colored -->
						  <div class="item-hover-<?php echo $PGP_Id;?> circle colored <?php echo $PGP_Effect; ?> <?php echo $PGP_Effect_animation; ?>">
						
						  <a href="<?php echo esc_attr($href_link); ?>" title="<?php if( $PGP_Show_Image_Label =="yes"){ echo esc_attr( $name); } ?>"
						  <?php  
							if($type != "link"){  ?> class="swipebox_<?php echo esc_attr($PGP_Id); ?>" <?php  } else{ ?> target="<?php echo esc_url($PGP_Open_Link); ?>" <?php } 
								 ?> >
							  <div class="img"><img src="<?php echo esc_url($circle); ?>" ></div>
							  <div class="info">
								<h3 class="h3-<?php echo $PGP_Id;?>"><?php if( $PGP_Show_Image_Label =="yes"){ if(strlen($name) > $str_lenght ) echo substr($name,0,$str_lenght)."..."; else echo $name; } ?></h3>
							  </div></a></div>
						  <!-- end colored -->
						</div>
						<?php
					}
				}
				?>
			</div>
		</div>
		<script>
		
			jQuery('.gallery1').imagesLoaded( function(){
	  jQuery('.gallery1').masonry({
	   itemSelector: '.item_margin',
	   isAnimated: true,
	   isFitWidth: true
	  });
	});
		</script>
		<?php
		endwhile;
		wp_reset_query();
		return ob_get_clean();
}
?>