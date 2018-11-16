<?php

if ( ! function_exists( 'baindesign324_remove_more_jump_link' ) ) :
	function baindesign324_remove_more_jump_link( $link ) {
		$offset = strpos( $link, '#more-' );
		if ($offset) {
			$end = strpos( $link, '"',$offset );
		}
		if ($end) {
			$link = substr_replace( $link, '', $offset, $end-$offset );
		}
		return $link;
	}
endif;