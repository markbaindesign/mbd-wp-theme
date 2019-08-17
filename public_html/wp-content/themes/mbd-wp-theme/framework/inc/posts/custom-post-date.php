<?php
/**
 * Returns a date from a custom field if exists
 * This is useful for CPTs such as Projects.
 */
if ( ! function_exists( 'baindesign324_custom_post_date' ) ) :
	function baindesign324_custom_post_date() {

	// Vars
	global $post;
	$id = $post->ID;
	$my_post_date = '';

	if ( get_field( 'custom_post_date', $id ) ) {
		$my_post_date = get_field( 'custom_post_date', $id );
	} else {
		$my_post_date = get_the_date();
	}
    return $my_post_date;
}
endif;