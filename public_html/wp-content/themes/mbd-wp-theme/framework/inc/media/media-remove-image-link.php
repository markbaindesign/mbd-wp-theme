<?php


if ( ! function_exists( 'baindesign324_imagelink_setup' ) ) :
	function baindesign324_imagelink_setup() {
		/**
		 * Remove default link for images
		 */
		$image_set = get_option( 'image_default_link_type' );
		if ( $image_set !== 'none' ) {
			update_option( 'image_default_link_type', 'none' );
		}
	}
endif;