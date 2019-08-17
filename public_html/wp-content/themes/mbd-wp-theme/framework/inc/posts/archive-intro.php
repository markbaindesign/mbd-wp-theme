<?php
/**
 * Returns archive/tag/taxonomy page intro content
 */
if ( ! function_exists( 'baindesign324_archive_intro' ) ) :
	function baindesign324_archive_intro($post_type) {
	$cf = $post_type.'_archive_intro';
	if ( get_field( $cf, 'option' ) ) {
		$intro = get_field( $cf, 'option' );
	} else {
		$intro = get_the_archive_description();
	}
    return $intro;
}
endif;