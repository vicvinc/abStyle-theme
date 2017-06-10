<?php
/**
 * Plugin Name: Photo Video Link Gallery
 * Version: 1.4.9
 * Description: Design Photo, Video, Link, Image Gallery With CSS3 Hover Animation & Display With Lightbox 
 * Author: Weblizar
 * Author URI: http://weblizar.com/plugins/photo-gallery-pluign/
 * Plugin URI: http://weblizar.com/plugins/photo-gallery-pluign/
 */
 
/**
 * Constant Variable
 */
define("PGP_TEXT_DOMAIN","PGP_TEXT_DOMAIN" );
define("PGP_PLUGIN_URL", plugin_dir_url(__FILE__));

add_action('plugins_loaded', 'PGP_GetReadyTranslation');
function PGP_GetReadyTranslation() {
	load_plugin_textdomain(PGP_TEXT_DOMAIN, FALSE, dirname( plugin_basename(__FILE__)).'/languages/' );
}

// Apply default settings on activation
register_activation_hook( __FILE__, 'PGP_DefaultSettingsPro' );
function PGP_DefaultSettingsPro(){
    $DefaultSettingsProArray = serialize( array(
		'PGP_Effect'          		=> "effect11",
		'PGP_Effect_animation'     	=> "right_to_left",
		'PGP_Show_Gallery_Title'	=> "yes",
		'PGP_Show_Image_Label'     	=> "yes",
        'PGP_Gallery_Layout'      	=> "col-md-6",
		'PGP_Open_Link'      		=> "_blank",
        'PGP_Color'         		=> "#31A3DD",
        'PGP_Font_Style'			=> "Arial",
        'PGP_Light_Box'          	=> "swipe_box",
		'PGP_Image_Border'    		=> "no"
    ));
    add_option("PGP_Settings", $DefaultSettingsProArray);
}

/**
* Crop Images In Desire Format
*/
add_image_size( 'PGP_gallery_admin_thumb', 300, 300, array( 'top', 'center' ) ); 
add_image_size( 'PGP_gallery_admin_circle', 400, 400, array( 'top', 'center' ) ); 
add_image_size( 'PGP_gallery_admin_medium', 400,9999,array( 'top', 'center' ) ); 

// Function To Remove Feature Image
function PGP_remove_image_box() {
	remove_meta_box('postimagediv','pgp_gallery','side');
}
add_action('do_meta_boxes', 'PGP_remove_image_box');

/**
* Short Code Detach Function To UpLoad JS And CSS
*/  
function PGP_ShortCodeDetect() {
    global $wp_query;
    $Posts = $wp_query->posts;
    $Pattern = get_shortcode_regex();

    foreach ($Posts as $Post) {
		if ( strpos($Post->post_content, 'PGP' ) ) {

			/**
             * js scripts
             */
            wp_enqueue_script('jquery');
         	
			/**
             * Load Light Box 3 Swipebox JS CSS
             */   
			wp_enqueue_style('PGP-swipe-css1', PGP_PLUGIN_URL.'lightbox/swipebox/swipebox.css');
			wp_enqueue_script('PGP-swipe-js1', PGP_PLUGIN_URL.'lightbox/swipebox/jquery.swipebox.min.js', array('jquery'));    
			
			/**   
             * css scripts
             */
           wp_enqueue_style('PGP-boot-strap-css', PGP_PLUGIN_URL.'css/bootstrap.css');
           wp_enqueue_style('PGP-Main-css', PGP_PLUGIN_URL.'css/main.css');
		   
            /**
             * font awesome css
             */
            wp_enqueue_style('PGP-font-awesome-4', PGP_PLUGIN_URL.'css/font-awesome-latest/css/font-awesome.min.css');
			
			/**
			 * envira & isotope js
			 */
			wp_enqueue_script('pgp_masonry', PGP_PLUGIN_URL.'js/masonry.pkgd.min.js', array('jquery'));    
			wp_enqueue_script('pgp_imagesloaded', PGP_PLUGIN_URL.'js/imagesloaded.pkgd.min.js', array('jquery'));			
			
            break;
        } //end of if
    } //end of foreach
}
add_action( 'wp_enqueue_scripts', 'PGP_ShortCodeDetect' );

add_action('admin_menu' , 'PGP_SettingsPage');

function PGP_SettingsPage() {
    add_submenu_page('edit.php?post_type=pgp_gallery', 'Pro Screenshots', 'Pro Screenshots', 'administrator', 'PGP-get-image-gallery-pro-plugin', 'PGP_get_image_gallery_pro_page_function');
	add_submenu_page('edit.php?post_type=pgp_gallery', __('Help and Support', PGP_TEXT_DOMAIN), __('Help and Support', PGP_TEXT_DOMAIN), 'administrator', 'PGP-image-gallery-settings', 'PGP_image_gallery_settings_page_function');
}

function PGP_get_image_gallery_pro_page_function() {
    //css
    wp_enqueue_style('PGP-font-awesome-5', PGP_PLUGIN_URL.'css/font-awesome-latest/css/font-awesome.min.css');
    wp_enqueue_style('PGP-pricing-table-css', PGP_PLUGIN_URL.'css/pricing-table.css');
    wp_enqueue_style('PGP-boot-strap-admin', PGP_PLUGIN_URL.'css/bootstrap-admin.css');
    require_once("get-photo-video-link-gallery-pro.php");
}

function PGP_image_gallery_settings_page_function() {
    //css
    wp_enqueue_style('PGP-boot-strap-admin', PGP_PLUGIN_URL.'css/bootstrap-admin.css');
    require_once("pgp_help_support.php");
}

class PGP {
    private static $instance;
    private $admin_thumbnail_size = 150;
    private $thumbnail_size_w = 150;
    private $thumbnail_size_h = 150;
	var $counter;

    public static function forge() {
        if (!isset(self::$instance)) {
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }
	
	private function __construct() {
		$this->counter = 0;
        add_action('admin_print_scripts-post.php', array(&$this, 'pgp_admin_print_scripts'));
        add_action('admin_print_scripts-post-new.php', array(&$this, 'pgp_admin_print_scripts'));
        add_image_size('pgp_gallery_admin_thumb', $this->admin_thumbnail_size, $this->admin_thumbnail_size, true);
        add_image_size('pgp_gallery_thumb', $this->thumbnail_size_w, $this->thumbnail_size_h, true);
        add_shortcode('pgpgallery', array(&$this, 'shortcode'));
        if (is_admin()) {
			add_action('init', array(&$this, 'PhotoGalleryPluginPro'), 1);
			add_action('add_meta_boxes', array(&$this, 'add_all_pgp_meta_boxes'));
			add_action('admin_init', array(&$this, 'add_all_pgp_meta_boxes'), 1);
			
			add_action('save_post', array(&$this, 'PGP_image_meta_box_save'), 9, 1);
			add_action('save_post', array(&$this, 'PGP_settings_meta_save'), 9, 1);
			
			add_action('wp_ajax_PGPgallery_get_thumbnail', array(&$this, 'ajax_get_thumbnail'));
		}
    }
	
	//Required JS & CSS
	public function pgp_admin_print_scripts() {
		if ( 'pgp_gallery' == $GLOBALS['post_type'] ) {
		
			wp_enqueue_script('media-upload');
			wp_enqueue_script('pgp-media-uploader-js', PGP_PLUGIN_URL . 'js/pgp-multiple-media-uploader.js', array('jquery'));
			
			wp_enqueue_media();
			//custom add image box css
			wp_enqueue_style('pgp-meta-css', PGP_PLUGIN_URL.'css/pgp-meta.css');
			
			//color-picker css n js
			wp_enqueue_style( 'wp-color-picker' );
			wp_enqueue_script( 'pgp-color-picker-script', plugins_url('js/wl-color-picker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
			
			//font awesome css
			wp_enqueue_style('pgp-font-awesome-4', PGP_PLUGIN_URL.'css/font-awesome-latest/css/font-awesome.min.css');
			
			//tool-tip js & css
			wp_enqueue_script('pgp-tool-tip-js',PGP_PLUGIN_URL.'tooltip/jquery.darktooltip.min.js', array('jquery'));
			wp_enqueue_style('pgp-tool-tip-css', PGP_PLUGIN_URL.'tooltip/darktooltip.min.css');
			
		}
	}
	
	// Register Custom Post Type
	public function PhotoGalleryPluginPro() {
	  $labels = array(
		'name' => __('Photo Video Link Gallery','PGP_TEXT_DOMAIN' ),
		'singular_name' => __('Photo Video Link Gallery','PGP_TEXT_DOMAIN' ),
		'add_new' => __('Add New Gallery', 'PGP_TEXT_DOMAIN' ),
		'add_new_item' => __('Add New Gallery', 'PGP_TEXT_DOMAIN' ),
		'edit_item' => __('Edit Gallery', 'PGP_TEXT_DOMAIN' ),
		'new_item' => __('New Gallery', 'PGP_TEXT_DOMAIN' ),
		'view_item' => __('View Gallery', 'PGP_TEXT_DOMAIN' ),
		'search_items' => __('Search Gallery', 'PGP_TEXT_DOMAIN' ),
		'not_found' => __('No Gallery found', 'PGP_TEXT_DOMAIN' ),
		'not_found_in_trash' => __('No Gallery found in Trash', 'PGP_TEXT_DOMAIN' ),
		'parent_item_colon' => __('Parent Gallery:', 'PGP_TEXT_DOMAIN' ),
		'all_items' => __('All Gallery', 'PGP_TEXT_DOMAIN' ),
		'menu_name' => __('Photo Video Link Gallery', 'PGP_TEXT_DOMAIN' ),
	  );

		$args = array(
			'labels' => $labels,
			'hierarchical' => false,
			'supports' => array( 'title','thumbnail'),
			'public' => false,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 10,
			'menu_icon' => 'dashicons-format-gallery',
			'show_in_nav_menus' => false,
			'publicly_queryable' => false,
			'exclude_from_search' => true,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => false,
			'capability_type' => 'post'
		);

        register_post_type( 'pgp_gallery', $args );
        add_filter( 'manage_edit-pgp_gallery_columns', array(&$this, 'pgp_gallery_columns' )) ;
        add_action( 'manage_pgp_gallery_posts_custom_column', array(&$this, 'pgp_gallery_manage_columns' ), 10, 2 );
	}
	
	function pgp_gallery_columns( $columns ){
        $columns = array(
            'cb' => '<input type="checkbox" />',
            'title' => __( 'Photo Video Link Gallery','PGP_TEXT_DOMAIN' ),
            'shortcode' => __( 'Gallery Shortcode','PGP_TEXT_DOMAIN' ),
            'date' => __( 'Date','PGP_TEXT_DOMAIN' )
        );
        return $columns;
    }

    function pgp_gallery_manage_columns( $column, $post_id ){
        global $post;
        switch( $column ) {
          case 'shortcode' :
            echo '<input type="text" value="[PGP id='.$post_id.']" readonly="readonly" />';
            break;
          default :
            break;
        }
    }
	
	public function add_all_pgp_meta_boxes() {
		add_meta_box( __('Add Images', 'PGP_TEXT_DOMAIN'), __('Add Images', 'PGP_TEXT_DOMAIN'), array(&$this, 'PGP_generate_add_image_meta_box_function'), 'pgp_gallery', 'normal', 'low' );
		add_meta_box( __('Apply Setting On Gallery', 'PGP_TEXT_DOMAIN'), __('Apply Setting On Gallery', 'PGP_TEXT_DOMAIN'), array(&$this, 'PGP_settings_meta_box_function'), 'pgp_gallery', 'normal', 'low');
		add_meta_box ( __('Gallery Shortcode', 'PGP_TEXT_DOMAIN'), __('Gallery Shortcode', 'PGP_TEXT_DOMAIN'), array(&$this, 'PGP_shotcode_meta_box_function'), 'pgp_gallery', 'side', 'low');
		
		// Rate Us Meta Box
		add_meta_box(__('Show us some love, Rate Us', 'PGP_TEXT_DOMAIN') , __('Show us some love, Rate Us', 'PGP_TEXT_DOMAIN'), array(&$this,'Rate_us_meta_box_function_PGP'), 'pgp_gallery', 'side', 'low');
		// Upgrade To Pro Version Meta Box
		add_meta_box(__('Upgrade To Pro Version', 'PGP_TEXT_DOMAIN') , __('Upgrade To Pro Version', 'PGP_TEXT_DOMAIN'), array(&$this,'PGP_upgrade_to_pro_function'), 'pgp_gallery', 'side', 'low');
		// Pro Features Meta Box
		add_meta_box(__('Pro Features', 'PGP_TEXT_DOMAIN') , __('Pro Features', 'PGP_TEXT_DOMAIN'), array(&$this,'PGP_pro_features'), 'pgp_gallery', 'side', 'low');
	}
	/**
	 * This function display Add New Image interface
	 * Also loads all saved gallery photos into gallery
	 */
    public function PGP_generate_add_image_meta_box_function($post) { ?>
		<div >
			<input type="hidden" id="PGP_wl_action" name="PGP_wl_action" value="PGP-save-settings">
            <ul id="pgp_gallery_thumbs" class="clearfix">
				<?php
				/* load saved photos into portfolio */
				$WPGP_AllPhotosDetails = unserialize(get_post_meta( $post->ID, 'PGP_all_photos_details', true));
				$TotalImages =  get_post_meta( $post->ID, 'PGP_total_images_count', true );
				if($TotalImages) {
					foreach($WPGP_AllPhotosDetails as $WPGP_SinglePhotoDetails) {
						$name = $WPGP_SinglePhotoDetails['PGP_image_label'];
						$UniqueString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
						$url = $WPGP_SinglePhotoDetails['PGP_image_url'];
						$url1 = $WPGP_SinglePhotoDetails['PGP_gallery_admin_thumb'];
						$url2 = $WPGP_SinglePhotoDetails['PGP_gallery_admin_medium'];
						$circle = $WPGP_SinglePhotoDetails['PGP_gallery_admin_circle'];
						$video = $WPGP_SinglePhotoDetails['PGP_video_link']; 
						$link = $WPGP_SinglePhotoDetails['PGP_external_link'];
						$type = $WPGP_SinglePhotoDetails['PGP_portfolio_type'];
						?>
						<li class="pgp-image-entry" id="rpg_img">
							<a class="image_gallery_remove pgpgallery_remove" href="#gallery_remove" id="rpg_remove_bt" ><img src="<?php echo  PGP_PLUGIN_URL.'images/image-close-icon.png'; ?>" /></a>
							<div class="pgp-admin-inner-div1" >
								
								<img src="<?php echo esc_url ($url1); ?>" class="pgp-meta-image" alt=""  style="">
								<input type="hidden" id="unique_string[]" name="unique_string[]" value="<?php echo $UniqueString; ?>" />
								
								<select name="PGP_portfolio_type[]" id="PGP_portfolio_type[]" style="width:100%;">
									<optgroup label="Select Type">
										<option value="image" <?php if($type == 'image') echo "selected=selected"; ?>><i class="fa fa-image"></i> <?php _e('Image','PGP_TEXT_DOMAIN')?></option>
										<option value="video" <?php if($type == 'video') echo "selected=selected"; ?>><i class="fa fa-youtube-play"></i> <?php _e('Video','PGP_TEXT_DOMAIN')?></option>
										<option value="link" <?php if($type == 'link') echo "selected=selected"; ?>><i class="fa fa-link"></i> <?php _e('Link','PGP_TEXT_DOMAIN')?></option>
									</optgroup>
								</select>
							</div>
							<div class="pgp-admin-inner-div2" >
								
								<input type="text" id="PGP_image_url[]" name="PGP_image_url[]" class="pgp_label_text"  value="<?php echo esc_url ($url); ?>"  readonly="readonly" style="display:none;" />
								<input type="text" id="PGP_gallery_admin_thumb[]" name="PGP_gallery_admin_thumb[]" class="pgp_label_text"  value="<?php echo esc_url ($url1); ?>"  readonly="readonly" style="display:none;" />
								<input type="text" id="PGP_gallery_admin_medium[]" name="PGP_gallery_admin_medium[]" class="pgp_label_text"  value="<?php echo esc_url ($url2); ?>"  readonly="readonly" style="display:none;" />
								<input type="text" id="PGP_gallery_admin_circle[]" name="PGP_gallery_admin_circle[]" class="pgp_label_text"  value="<?php echo esc_url ($circle); ?>"  readonly="readonly" style="display:none;" />
				
								<p>
									<label><?php _e('Label','PGP_TEXT_DOMAIN')?></label>
									<input type="text" id="PGP_image_label[]" name="PGP_image_label[]" value="<?php echo esc_attr ($name); ?>" placeholder="Enter Label Here" class="pgp_label_text">
								</p>
								<p>
									<label><?php _e('Video URL','PGP_TEXT_DOMAIN')?> ( <a href="http://weblizar.com/get-youtube-vimeo-video-url/" target="_blank"><strong><?php _e('Help','PGP_TEXT_DOMAIN')?></strong></a> )</label>
									<input type="text" id="PGP_video_link[]" name="PGP_video_link[]" value="<?php echo esc_url($video); ?>" placeholder="Enter Youtube/Vimeo Video URL" class="pgp_label_text">
								</p>
								<label><?php _e('Link','PGP_TEXT_DOMAIN')?></label>
								<input type="text" id="PGP_external_link[]" name="PGP_external_link[]" value="<?php echo esc_url($link); ?>" placeholder="Enter Link URL" class="pgp_label_text">
							</div>
						</li>
						<?php
					} // end of foreach
				} else {
					$TotalImages = 0;
				}
				?>
            </ul>
        </div>
		
		<!--Add New Image Button-->
		<div class="pgp-image-entry add_pgp_new_image" id="pgp_gallery_upload_button" data-uploader_title="Upload Image" data-uploader_button_text="Select" >
			<div class="dashicons dashicons-plus"></div>
			<p>
				<?php _e('Add New Media', PGP_TEXT_DOMAIN); ?>
			</p>
		</div>
		<div style="clear:left;"></div>
		<input id="PGP_delete_all_button" class="button" type="button" value="Delete All" rel="">
			
		<p><strong>Tips:</strong> Plugin crop images with same size thumbnails. So, please upload all gallery images using Add New Image button. Don't use/add pre-uploaded images which are uploaded previously using Media/Post/Page.</p>
        <style>
		.fag-rate-us span.dashicons{
			width: 30px;
			height: 30px;
			color:#F8504B !important;
		}
		.fag-rate-us span.dashicons-star-filled:before {
			content: "\f155";
			font-size: 30px;
		}
		.fag-rate-us {
				  color: #F8504B !important;
				  margin-bottom:5px;
				}
		</style>
		<div style="text-align:left;color:#F8504B !important;">
			<p>Please Review & Rate Us On WordPress</p>
			<a class="upgrade-to-pro-demo fag-rate-us" style=" text-decoration: none; height: 40px; width: 40px;" href="https://wordpress.org/plugins/photo-video-link-gallery/" target="_blank">
				<span class="dashicons dashicons-star-filled"></span>
				<span class="dashicons dashicons-star-filled"></span>
				<span class="dashicons dashicons-star-filled"></span>
				<span class="dashicons dashicons-star-filled"></span>
				<span class="dashicons dashicons-star-filled"></span>
			</a>
		</div>
		<div class="upgrade-to-pro-demo" style="text-align:left;margin-bottom:10px;margin-top:10px;color:#F8504B !important;">
			<a href="https://wordpress.org/plugins/photo-video-link-gallery/" target="_blank" class="button button-primary button-hero">RATE US</a>
		</div>
        <?php
    }
	
	/**
	 * This function display Add New Image interface
	 * Also loads all saved gallery photos into gallery
	 */
    public function PGP_settings_meta_box_function($post) { 
		require_once('photo-gallery-setting-meta-box.php');
	}
	
	public function PGP_shotcode_meta_box_function() { ?>
		<p><?php _e("Use below shortcode in any Page/Post to publish your gallery", PGP_TEXT_DOMAIN);?></p>
		<input readonly="readonly" type="text" value="<?php echo "[PGP id=".get_the_ID()."]"; ?>">
		<?php 
	}
	
	// Rate Us Meta Box Function
	function Rate_us_meta_box_function_PGP() { ?>
		<style>
		.fag-rate-us span.dashicons{
			width: 30px;
			height: 30px;
		}
		.fag-rate-us span.dashicons-star-filled:before {
			content: "\f155";
			font-size: 30px;
		}
		</style>
		<div align="center">
			<p>Please Review & Rate Us On WordPress</p>
			<a class="upgrade-to-pro-demo .fag-rate-us" style=" text-decoration: none; height: 40px; width: 40px;" href="https://wordpress.org/plugins/photo-video-link-gallery/" target="_blank">
				<span class="dashicons dashicons-star-filled"></span>
				<span class="dashicons dashicons-star-filled"></span>
				<span class="dashicons dashicons-star-filled"></span>
				<span class="dashicons dashicons-star-filled"></span>
				<span class="dashicons dashicons-star-filled"></span>
			</a>
		</div>
		<div class="upgrade-to-pro-demo" style="text-align:center;margin-bottom:10px;margin-top:10px;">
			<a href="https://wordpress.org/plugins/photo-video-link-gallery/" target="_blank" class="button button-primary button-hero">RATE US</a>
		</div>
		<?php
	}
	
	function PGP_upgrade_to_pro_function(){
		?>
		<div class="upgrade-to-pro-demo" style="text-align:center;margin-bottom:10px;margin-top:10px;">
			<a href="http://demo.weblizar.com/photo-video-link-gallery-pro/"  target="_new" class="button button-primary button-hero">View Live Demo</a>
		</div>
		<div class="upgrade-to-pro-admin-demo" style="text-align:center;margin-bottom:10px;">
			<a href="http://demo.weblizar.com/photo-video-link-gallery-pro-admin-demo/" target="_new" class="button button-primary button-hero">View Admin Demo</a>
		</div>
		<div class="upgrade-to-pro" style="text-align:center;margin-bottom:10px;">
			<a href="http://weblizar.com/plugins/photo-video-link-gallery-pro/" target="_new" class="button button-primary button-hero">Upgarde To Pro</a>
		</div>
		<?php
	}
	
	function PGP_pro_features(){
	?>
		<ul style="">
			<li class="plan-feature">Responsive Design</li>
			<li class="plan-feature">3 Gallery Layout</li>
			<li class="plan-feature">Unlimited Hover Color</li>
			<li class="plan-feature">10 Types of Hover Color Opacity</li>
			<li class="plan-feature">Isotope/Masonry Effects</li>
			<li class="plan-feature">Youtube/Vimeo Video</li>
			<li class="plan-feature">Extrenal Link </li>
			<li class="plan-feature">All Gallery Shortcode</li>
			<li class="plan-feature">Each Gallery has Unique Shortcode</li>
			<li class="plan-feature">19 Types of Hover Animation</li>
			<li class="plan-feature">2 Types of Image Design Layout</li>
			<li class="plan-feature">500+ of Font Style</li>
			<li class="plan-feature">2 types Of Lightbox Integrated</li>
			<li class="plan-feature">Drag and Drop image Position</li>
			<li class="plan-feature">Multiple Image uploader</li>
			<li class="plan-feature">Shortcode Button on post or page</li>
			<li class="plan-feature">Unique settings for each gallery</li>
			<li class="plan-feature">Hide/Show gallery Title and label</li>
			<li class="plan-feature">Google Fonts</li>	
		</ul>
	<?php 
	} 

	public function admin_thumb($id) {
		$image  = wp_get_attachment_image_src($id, 'PGP_gallery_admin_original', true);
		$image1 = wp_get_attachment_image_src($id, 'PGP_gallery_admin_thumb', true);
		$image2 = wp_get_attachment_image_src($id, 'PGP_gallery_admin_medium', true);
		$circle = wp_get_attachment_image_src($id, 'PGP_gallery_admin_circle', true);
		$UniqueString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
        ?>
		<li class="pgp-image-entry" id="rpg_img">
			<a class="image_gallery_remove pgpgallery_remove" href="#gallery_remove" id="rpg_remove_bt" ><img src="<?php echo  PGP_PLUGIN_URL.'images/image-close-icon.png'; ?>" /></a>
			<div class="pgp-admin-inner-div1" >
				
				<img src="<?php echo $image1[0]; ?>" class="pgp-meta-image" alt=""  style="">
				<select name="PGP_portfolio_type[]" id="PGP_portfolio_type[]" style="width:100%;">
					<optgroup label="Select Type">
						<option value="image" selected="selected"><i class="fa fa-image"></i> <?php _e('Image','PGP_TEXT_DOMAIN')?></option>
						<option value="video"><i class="fa fa-youtube-play"></i> <?php _e('Video','PGP_TEXT_DOMAIN')?></option>
						<option value="link"><i class="fa fa-link"></i> <?php _e('Link','PGP_TEXT_DOMAIN')?></option>
					</optgroup>
				</select>
				</div>
			<div class="pgp-admin-inner-div2" >
				<input type="text" id="PGP_image_url[]" name="PGP_image_url[]" class="pgp_label_text"  value="<?php echo $image[0]; ?>"  readonly="readonly" style="display:none;" />
				<input type="text" id="PGP_gallery_admin_thumb[]" name="PGP_gallery_admin_thumb[]" class="pgp_label_text"  value="<?php echo $image1[0]; ?>"  readonly="readonly" style="display:none;" />
				<input type="text" id="PGP_gallery_admin_medium[]" name="PGP_gallery_admin_medium[]" class="pgp_label_text"  value="<?php echo $image2[0]; ?>"  readonly="readonly" style="display:none;" />
				<input type="text" id="PGP_gallery_admin_circle[]" name="PGP_gallery_admin_circle[]" class="pgp_label_text"  value="<?php echo $circle[0]; ?>"  readonly="readonly" style="display:none;" />
				<p>
					<label><?php _e('Label','PGP_TEXT_DOMAIN')?></label>
					<input type="text" id="PGP_image_label[]" name="PGP_image_label[]" placeholder="Enter Label Here" class="pgp_label_text">
				</p>
				<p>
					<label><?php _e('Video URL','PGP_TEXT_DOMAIN')?> ( <a href="http://weblizar.com/get-youtube-vimeo-video-url/" target="_blank"><strong><?php _e('Help','PGP_TEXT_DOMAIN')?></strong></a> )</label>
					<input type="text" id="PGP_video_link[]" name="PGP_video_link[]" placeholder="Enter Youtube/Vimeo Video URL" class="pgp_label_text">
				</p>
					<label><?php _e('Link','PGP_TEXT_DOMAIN')?></label>
					<input type="text" id="PGP_external_link[]" name="PGP_external_link[]" placeholder="Enter Link URL" class="pgp_label_text">
			</div>
		</li>
        <?php
    }
	
	
    public function ajax_get_thumbnail() {
        echo $this->admin_thumb($_POST['imageid']);
        die;
    }

    public function PGP_image_meta_box_save($PostID) {
		if(isset($PostID) && isset($_POST['PGP_wl_action'])) {
			if(isset($_POST['PGP_image_url'])){
			$TotalImages = count($_POST['PGP_image_url']);
			$ImagesArray = array();
			if($TotalImages) {
				for($i=0; $i < $TotalImages; $i++) {
					$image_label = stripslashes(sanitize_text_field( $_POST['PGP_image_label'][$i] ));
					$url = sanitize_text_field( $_POST['PGP_image_url'][$i] );
					$url1 = sanitize_text_field( $_POST['PGP_gallery_admin_thumb'][$i] );
					$url2 = sanitize_text_field( $_POST['PGP_gallery_admin_medium'][$i] );
					$circle =sanitize_text_field( $_POST['PGP_gallery_admin_circle'][$i] );
					$video = sanitize_text_field( $_POST['PGP_video_link'][$i] );
					$link = sanitize_text_field( $_POST['PGP_external_link'][$i] );
					$type = sanitize_text_field( $_POST['PGP_portfolio_type'][$i] );
					$ImagesArray[] = array(
						'PGP_image_label' => $image_label,
						'PGP_image_url' => $url,
						'PGP_gallery_admin_thumb' => $url1,
						'PGP_gallery_admin_medium' => $url2,
						'PGP_gallery_admin_circle' => $circle,
						'PGP_video_link' => $video,
						'PGP_external_link' => $link,
						'PGP_portfolio_type' => $type
					);
				}
				update_post_meta($PostID, 'PGP_all_photos_details', serialize($ImagesArray));
				update_post_meta($PostID, 'PGP_total_images_count', $TotalImages);
			}
			
			} else {
				$TotalImages = 0;
				update_post_meta($PostID, 'PGP_total_images_count', $TotalImages);
				$ImagesArray = array();
				update_post_meta($PostID, 'PGP_all_photos_details', serialize($ImagesArray));
			}
		}
    }
	
	//save settings meta box values
	public function PGP_settings_meta_save($PostID) {		
	  if(isset($PostID) && isset($_POST['PGP_Show_Gallery_Title'])){
			
		$PGP_Effect		= sanitize_option ( 'PGP_Effect', $_POST['PGP_Effect'] );
		$PGP_Effect_animation	= sanitize_option ( 'PGP_effect11_anim', $_POST['PGP_effect11_anim'] );
		$PGP_Show_Gallery_Title = sanitize_option ( 'PGP_Show_Gallery_Title', $_POST['PGP_Show_Gallery_Title'] );
		$PGP_Show_Image_Label   = sanitize_option ( 'PGP_Show_Image_Label', $_POST['PGP_Show_Image_Label'] );
		$PGP_Gallery_Layout     = sanitize_option ( 'PGP_Gallery_Layout', $_POST['PGP_Gallery_Layout'] );
		$PGP_Open_Link		= sanitize_option ( 'PGP_open_link', $_POST['PGP_open_link'] );
		$PGP_Color 		= sanitize_option ( 'PGP_Color', $_POST['PGP_Color'] );
		$PGP_Font_Style         = sanitize_option ( 'PGP_Font_Style', $_POST['PGP_Color'] );
		$PGP_Light_Box          = sanitize_option ( 'PGP_Light_Box', $_POST['PGP_Light_Box'] );
		$PGP_Image_Border       = sanitize_option ( 'PGP_Image_Border', $_POST['PGP_Image_Border'] );
		$PGP_Custom_CSS    	= sanitize_text_field ( $_POST['PGP_Custom_CSS'] );

		$PGP_Settings_Array = serialize( array(
			'PGP_Effect'          		=> $PGP_Effect,
			'PGP_Effect_animation'     	=> $PGP_Effect_animation,
			'PGP_Show_Gallery_Title'	=> $PGP_Show_Gallery_Title,
			'PGP_Show_Image_Label'     	=> $PGP_Show_Image_Label,
			'PGP_Gallery_Layout'      	=> $PGP_Gallery_Layout,
			'PGP_Open_Link'      		=> $PGP_Open_Link,
			'PGP_Color'         		=> $PGP_Color,
			'PGP_Font_Style'		=> $PGP_Font_Style,
			'PGP_Light_Box'          	=> $PGP_Light_Box,
			'PGP_Image_Border'         	=> $PGP_Image_Border,
			'PGP_Custom_CSS'   		=> $PGP_Custom_CSS
		) );

		$PGP_Gallery_Settings = "PGP_Gallery_Settings_".$PostID;
		update_post_meta($PostID, $PGP_Gallery_Settings, $PGP_Settings_Array);
	  }
	}
}

global $PGP;
$PGP = PGP::forge();

/**
 * Gallery Plugin Pro Short Code [PGP].
 */
require_once("photo-gallery-short-code.php");

add_action('media_buttons', 'pgp_custom_button', 16);
add_action('admin_footer', 'pgp_inline_popup_content');

function pgp_custom_button() {
  $img = plugins_url( '/images/gallery.png' , __FILE__ );
  $container_id = 'PGP';
  echo '<a class="button button-primary thickbox"  title="'. __("Select Gallery to insert into post",PGP_TEXT_DOMAIN).'"  
  href="#TB_inline?width=400&inlineId='.$container_id.'">
		<span class="wp-media-buttons-icon" style="background: url('.$img.'); background-repeat: no-repeat; background-position: left bottom;"></span>
	'. __("Gallery Shortcode","PGP_TEXT_DOMAIN").'
	</a>';
}

function pgp_inline_popup_content() {
	?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#pgp_galleryinsert').on('click', function() {
			var id = jQuery('#pgp-gallery-select option:selected').val();
			window.send_to_editor('<p>[PGP id=' + id + ']</p>');
			tb_remove();
		})
	});
	</script>
	<div id="PGP" style="display:none;">
	  <h3><?php _e('Select Gallery To Insert Into Post','PGP_TEXT_DOMAIN');?></h3>
	  <?php 
		$all_posts = wp_count_posts( 'pgp_gallery')->publish;
		$args = array('post_type' => 'pgp_gallery', 'posts_per_page' =>$all_posts);
		global $pgp_galleries;
		$pgp_galleries = new WP_Query( $args );			
		if( $pgp_galleries->have_posts() ) { ?>	
			<select id="pgp-gallery-select">
				<?php
				while ( $pgp_galleries->have_posts() ) : $pgp_galleries->the_post(); ?>
				<option value="<?php echo get_the_ID(); ?>"><?php the_title(); ?></option>
				<?php
				endwhile; 
				?>
			</select>
			<button class='button primary' id='pgp_galleryinsert'><?php _e('Insert Gallery Shortcode','PGP_TEXT_DOMAIN');?></button>
			<?php
		} else {
			_e('No Gallery found','PGP_TEXT_DOMAIN');
		}
		?>
	</div>
	<?php
}
?>