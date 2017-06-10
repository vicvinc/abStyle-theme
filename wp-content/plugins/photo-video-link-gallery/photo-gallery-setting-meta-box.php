<?php
	/**
     * Load Saved Photo Gallery Plugin Pro Settings
     */
	$PostId = $post->ID;
	$PGP_Gallery_Settings = "PGP_Gallery_Settings_".$PostId;
	$PGP_Gallery_Settings = unserialize(get_post_meta( $PostId, $PGP_Gallery_Settings, true));
	//$DefaultSettings = unserialize(get_option('PGP_Settings'));
    if($PGP_Gallery_Settings['PGP_Show_Gallery_Title'] && $PGP_Gallery_Settings['PGP_Color'] ) {
		$PGP_Effect			= $PGP_Gallery_Settings['PGP_Effect']; 
		$PGP_Effect_animation		= $PGP_Gallery_Settings['PGP_Effect_animation']; 
		$PGP_Show_Gallery_Title		= $PGP_Gallery_Settings['PGP_Show_Gallery_Title']; 
		$PGP_Show_Image_Label		= $PGP_Gallery_Settings['PGP_Show_Image_Label']; 
		$PGP_Gallery_Layout		= $PGP_Gallery_Settings['PGP_Gallery_Layout']; 
		$PGP_Open_Link        		= $PGP_Gallery_Settings['PGP_Open_Link']; 
		$PGP_Color 			= $PGP_Gallery_Settings['PGP_Color']; 
		$PGP_Font_Style			= $PGP_Gallery_Settings['PGP_Font_Style'];
		$PGP_Light_Box			= $PGP_Gallery_Settings['PGP_Light_Box']; 
		$PGP_Image_Border		= $PGP_Gallery_Settings['PGP_Image_Border'];
		$PGP_Custom_CSS			= $PGP_Gallery_Settings['PGP_Custom_CSS']; 
    }
	else{
		$PGP_Gallery_Settings = unserialize(get_option( 'PGP_Settings' ));
		if(count($PGP_Gallery_Settings)) {
			$PGP_Effect  			= $PGP_Gallery_Settings['PGP_Effect']; 
			$PGP_Effect_animation  		= $PGP_Gallery_Settings['PGP_Effect_animation'];
			$PGP_Show_Gallery_Title    	= $PGP_Gallery_Settings['PGP_Show_Gallery_Title'];
			$PGP_Show_Image_Label      	= $PGP_Gallery_Settings['PGP_Show_Image_Label'];
			$PGP_Gallery_Layout        	= $PGP_Gallery_Settings['PGP_Gallery_Layout'];
			$PGP_Open_Link        		= $PGP_Gallery_Settings['PGP_Open_Link'];
			$PGP_Color 			= $PGP_Gallery_Settings['PGP_Color'];
			$PGP_Font_Style           	= $PGP_Gallery_Settings['PGP_Font_Style'];
			$PGP_Light_Box           	= $PGP_Gallery_Settings['PGP_Light_Box'];
			$PGP_Image_Border          	= $PGP_Gallery_Settings['PGP_Image_Border'];
			$PGP_Custom_CSS			= "";
		}
	}
?>

<style>
@media only screen and (min-width: 970px){
	#post-body.columns-2 #postbox-container-1 {
		float: right;
		margin-right: 15px;
		width: 280px;
		right:0;
		position:absolute;
	}
}
.thumb-pro th, .thumb-pro label, .thumb-pro h3, .thumb-pro{
	color:#31a3dd !important;
	font-weight:bold;
}
.caro-pro th, .caro-pro label, .caro-pro h3, .caro-pro{
	color:#DA5766 !important;
	font-weight:bold;
}
.form-table tr td.image_color label{
	font-weight:bold;
	font-size:24px;
}
</style>

<?php require_once("tooltip.php"); ?>
<input type="hidden" id="wl_action" name="wl_action" value="wl-save-settings">
<table class="form-table">
	<tbody>
		<tr>
			<th scope="row"><label><?php _e('Transition Effect','PGP_TEXT_DOMAIN')?></label></th>
			<td>
				<select name="PGP_Effect" id="PGP_Effect" onchange='effect_change()'>
					<optgroup label="Select Effect">
						<option value="effect11" <?php if($PGP_Effect == 'effect11') echo "selected=selected"; ?>><?php _e('Effect 1','PGP_TEXT_DOMAIN')?></option>
						<option value="effect4" <?php if($PGP_Effect == 'effect4') echo "selected=selected"; ?>><?php _e('Effect 2','PGP_TEXT_DOMAIN')?></option>
					</optgroup>
				</select>
				<p class="description">
					<?php _e('Choose an animation effect apply on images after mouse hover.','PGP_TEXT_DOMAIN')?>
					
				</p>
			</td>
		</tr>
		<tr>
			<th scope="row"><label><?php _e('Animation','PGP_TEXT_DOMAIN')?></label></th>
			<td>
				<select name="PGP_effect11_anim" id="PGP_effect11_anim">
					<optgroup label="Select Animation">
						<option value="left_to_right" <?php if($PGP_Effect_animation == 'left_to_right') echo "selected=selected"; ?>><?php _e('Left to Right','PGP_TEXT_DOMAIN')?></option>
						<option value="right_to_left" <?php if($PGP_Effect_animation == 'right_to_left') echo "selected=selected"; ?>><?php _e('Right to Left','PGP_TEXT_DOMAIN')?></option>
						<option value="top_to_bottom" <?php if($PGP_Effect_animation == 'top_to_bottom') echo "selected=selected"; ?>><?php _e('Top to Bottom','PGP_TEXT_DOMAIN')?></option>
						<option value="bottom_to_top" <?php if($PGP_Effect_animation == 'bottom_to_top') echo "selected=selected"; ?>><?php _e('Bottom to Top','PGP_TEXT_DOMAIN')?></option>
					</optgroup>
				</select>
				<p class="description">
					<?php _e('Choose Animation style.','PGP_TEXT_DOMAIN')?>
				</p>
			</td>
		</tr>
		
		<tr>
			<th scope="row"><label><?php _e('Image Hover Color','PGP_TEXT_DOMAIN')?></label></th>
			<td class="image_color">
				<?php if($PGP_Color == "") $PGP_Color = "#31A3DD"; ?>
				<input id="PGP_Color" name="PGP_Color" type="text" value="<?php echo $PGP_Color; ?>" class="my-color-field" data-default-color="#ffffff" />
				
				
				<p class="description">
					<?php _e('Select any color to apply on image gallery.','PGP_TEXT_DOMAIN')?>
					<a href="#" id="p4" data-tooltip="#s4"><?php _e('Preview','PGP_TEXT_DOMAIN')?></a>
				</p>
			</td>
		</tr>
		
		<tr>
			<th scope="row"><label><?php _e('Show Gallery Title','PGP_TEXT_DOMAIN')?></label></th>
			<td>
				<?php if($PGP_Show_Gallery_Title == "") $PGP_Show_Gallery_Title = "yes"; ?>
				<input type="radio" name="PGP_Show_Gallery_Title" id="PGP_Show_Gallery_Title1" value="yes" <?php if($PGP_Show_Gallery_Title == 'yes' ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="PGP_Show_Gallery_Title" id="PGP_Show_Gallery_Title2" value="no" <?php if($PGP_Show_Gallery_Title == 'no' ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to hide or show gallery title.','PGP_TEXT_DOMAIN')?>
					<a href="#" id="p5" data-tooltip="#s5"><?php _e('Preview','PGP_TEXT_DOMAIN')?></a>
				</p>
			</td>
		</tr>
		
		<tr>
			<th scope="row"><label><?php _e('Show Image Label','PGP_TEXT_DOMAIN')?></label></th>
			<td>
				<?php if($PGP_Show_Image_Label == "") $PGP_Show_Image_Label = "yes"; ?>
				<input type="radio" name="PGP_Show_Image_Label" id="PGP_Show_Image_Label1" value="yes" <?php if($PGP_Show_Image_Label == 'yes' ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="PGP_Show_Image_Label" id="PGP_Show_Image_Label2" value="no" <?php if($PGP_Show_Image_Label == 'no' ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to hide or show label on image.','PGP_TEXT_DOMAIN')?>
					<a href="#" id="p6" data-tooltip="#s6"><?php _e('Preview','PGP_TEXT_DOMAIN')?></a>
				</p>
			</td>
		</tr>
		
		<tr>
			<th scope="row"><label><?php _e('Gallery Layout','PGP_TEXT_DOMAIN')?></label></th>
			<td>
				<?php if($PGP_Gallery_Layout == "") $PGP_Gallery_Layout = "col-md-6"; ?>
				<select name="PGP_Gallery_Layout" id="PGP_Gallery_Layout">
					<optgroup label="Select Gallery Layout">
						<option value="col-md-6" <?php if($PGP_Gallery_Layout == 'col-md-6') echo "selected=selected"; ?>><?php _e('Two Column','PGP_TEXT_DOMAIN')?></option>
						<option value="col-md-4" <?php if($PGP_Gallery_Layout == 'col-md-4') echo "selected=selected"; ?>><?php _e('Three Column','PGP_TEXT_DOMAIN')?></option>
					</optgroup>
				</select>
				<p class="description">
					<?php _e('Choose a column layout for image gallery.','PGP_TEXT_DOMAIN')?>
					<a href="#" id="p7" data-tooltip="#s7"><?php _e('Preview','PGP_TEXT_DOMAIN')?></a>
				</p>
			</td>
		</tr>
		
		<tr>
			<th scope="row"><label><?php _e('Open Link','PGP_TEXT_DOMAIN')?></label></th>
			<td>
				<?php if($PGP_Open_Link == "") $PGP_Open_Link = "_blank"; ?>
				<input type="radio" name="PGP_open_link" id="PGP_open_link" value="_self" <?php if($PGP_Open_Link == '_self' ) { echo "checked"; } ?>> <?php _e('In Same Tab','PGP_TEXT_DOMAIN')?>
				<input type="radio" name="PGP_open_link" id="PGP_open_link" value="_blank" <?php if($PGP_Open_Link == '_blank' ) { echo "checked"; } ?>> <?php _e('In New Tab','PGP_TEXT_DOMAIN')?>
				<p class="description">
					<?php _e('Select option to open link in save tab or in new tab.','PGP_TEXT_DOMAIN')?>
				</p>
			</td>
		</tr>
		
		<tr>
			<th scope="row"><label><?php _e('Font Style','PGP_TEXT_DOMAIN')?></label></th>
			<td>
				<?php if($PGP_Font_Style == "") $PGP_Font_Style="Arial" ;  ?>
				<select  name="PGP_Font_Style" class="standard-dropdown" id="PGP_Font_Style">
					<optgroup label="Default Fonts">
						<option value="Arial" <?php selected($PGP_Font_Style, 'Arial' ); ?>>Arial</option>
						<option value="Arial Black" <?php selected($PGP_Font_Style, 'Arial Black' ); ?>>Arial Black</option>
						<option value="Courier New" <?php selected($PGP_Font_Style, 'Courier New' ); ?>>Courier New</option>
						<option value="georgia" <?php selected($PGP_Font_Style, 'Georgia' ); ?>>Georgia</option>
						<option value="grande" <?php selected($PGP_Font_Style, 'Grande' ); ?>>Grande</option>
						<option value="_helvetica_neue" <?php selected($PGP_Font_Style, '_helvetica_neue' ); ?>>Helvetica Neue</option>
						<option value="Impact" <?php selected($PGP_Font_Style, 'Impact' ); ?>>Impact</option>
						<option value="_lucida" <?php selected($PGP_Font_Style, '_lucida' ); ?>>Lucida</option>
						<option value="_lucida" <?php selected($PGP_Font_Style, '_lucida' ); ?>>Lucida Grande</option>
						<option value="_OpenSansBold" <?php selected($PGP_Font_Style, 'OpenSansBold' ); ?>>OpenSansBold</option>
						<option value="_palatino" <?php selected($PGP_Font_Style, '_palatino' ); ?>>Palatino</option>
						<option value="_sans" <?php selected($PGP_Font_Style, '_sans' ); ?>>Sans</option>
						<option value="sans-serif" <?php selected($PGP_Font_Style, 'sans-serif' ); ?>>Sans-Serif</option>
						<option value="_tahoma" <?php selected($PGP_Font_Style, '_tahoma' ); ?>>Tahoma</option>
						<option value="_times"<?php selected($PGP_Font_Style, '_times' ); ?>>Times New Roman</option>
						<option value="Trebuchet" <?php selected($PGP_Font_Style, 'Trebuchet' ); ?>>Trebuchet</option>
						<option value="_verdana" <?php selected($PGP_Font_Style, '_verdana' ); ?>>Verdana</option>
					</optgroup>
				</select>
				<p class="description">
					<?php _e('Choose a caption font style.','PGP_TEXT_DOMAIN')?>
					<a href="#" id="p9" data-tooltip="#s9"><?php _e('Preview','PGP_TEXT_DOMAIN')?></a>
				</p>
			</td>
		</tr>

		<tr>
			<th scope="row"><label><?php _e('Light Box Styles','PGP_TEXT_DOMAIN')?></label></th>
			<td>
				<?php if($PGP_Light_Box == "") $PGP_Light_Box = "lightbox2"; ?>
				<select name="PGP_Light_Box" id="PGP_Light_Box">
					<optgroup label="Select Light Box Styles">
						<option value="swipe_box" <?php if($PGP_Light_Box == 'swipe_box') echo "selected=selected"; ?>>Swipe Box</option>
					</optgroup>
				</select>
				<p class="description">
					<?php _e('Choose an image Title style.','PGP_TEXT_DOMAIN')?>
					<a href="#" id="p10" data-tooltip="#s10"><?php _e('Preview','PGP_TEXT_DOMAIN')?></a>
				</p>
			</td>
		</tr>
		
		<tr>
			<th scope="row"><label><?php _e('Image Border','PGP_TEXT_DOMAIN')?></label></th>
			<td>
				<?php if($PGP_Image_Border == "") $PGP_Image_Border = "yes"; ?>
				<input type="radio" name="PGP_Image_Border" id="PGP_Image_Border" value="yes" <?php if($PGP_Image_Border == 'yes' ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i>
				<input type="radio" name="PGP_Image_Border" id="PGP_Image_Border" value="no" <?php if($PGP_Image_Border == 'no' ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to apply border on portfolio image thumbnails.','PGP_TEXT_DOMAIN')?>
					<a href="#" id="p11" data-tooltip="#s11"><?php _e('Preview','PGP_TEXT_DOMAIN')?></a>
				</p>
			</td>
		</tr>	
		
		<tr >
			<th scope="row"><label><?php _e('Custom CSS','PGP_TEXT_DOMAIN')?></label></th>
			<td>
				<textarea id="PGP_Custom_CSS" name="PGP_Custom_CSS" type="text" class="" style="width:80%"><?php echo $PGP_Custom_CSS; ?></textarea>
				<p class="description">
					<?php _e('Enter any custom css you want to apply on this gallery.','PGP_TEXT_DOMAIN')?><br>
					<?php _e('Note: Please Do Not Use <b>Style</b> Tag With Custom CSS.','PGP_TEXT_DOMAIN')?>
				</p>
			</td>
		</tr>
	</tbody>
</table>