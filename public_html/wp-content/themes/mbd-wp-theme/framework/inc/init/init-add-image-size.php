<?php
		
/**
 * Add custom image sizes
 */

if ( ! function_exists( 'baindesign324_custom_image_sizes' ) ) :
	function baindesign324_custom_image_sizes() {
		add_image_size( 'latest_post', 428, 285, true );
	}
endif;

// Always use the “after_setup_theme” action hook.