<?php

/**
 * Get the custom post date if there is one
 */

if ( ! function_exists( 'baindesign324_custom_post_date' ) ) :
	function baindesign324_custom_post_date() {
	global $post; 
	$post_date = '';
	$post_date_custom = get_field( 'post_date_custom' );
	
	if ( $post_date_custom ) {
		$post_date = $post_date_custom; 
	} else {
		$post_date = ''; 
	}
	return $post_date;
}
endif;