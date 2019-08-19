<?php

/**
 * Media object block 
 */

if ( ! function_exists( 'baindesign324_media_block' ) ) :
	function baindesign324_media_block() {
		/*if( !$image_url ){
			return;
		}*/

		// Vars
		$image_array = get_sub_field('media_block_image');
		$image_url = $image_array["url"];
		$text = get_sub_field('media_block_text');
		$link = get_sub_field('media_block_link');
		$link_text = get_sub_field('media_block_link_text');
		$group_class = get_sub_field('media_object_group_class');
		$group_id = get_sub_field('media_object_group_id');								

		$content = '<div id="'.$group_id.'" class="section flex-media-object'. $group_class.'">';
		$content .='<div class="container container_medium media-object-container">';
		$content .= baindesign324_template_media_object($image_url, $text, $link, $link_text);
		$content .=	'</div></div>';

		echo $content;
	}
endif;