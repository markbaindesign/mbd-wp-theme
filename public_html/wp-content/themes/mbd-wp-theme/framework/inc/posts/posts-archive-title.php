<?php

/**
 * Archive title
 */

if ( ! function_exists( 'baindesign324_title_archive' ) ) :
	function baindesign324_title_archive($post_type) {	

	$cf = $post_type . '_archive_title';
	$archive_title = get_field( $cf, 'option' );
	
	if ( $archive_title ) {
		$title = $archive_title;
	} else {
		$title = '<h1 class="posts__title page__title archive__title">' . get_the_archive_title() . '</h1>';
	}
	return $title;
}
endif;