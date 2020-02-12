<?php

if ( ! function_exists( 'baindesign324_remove_script_version' ) ) :
	function baindesign324_remove_script_version( $src ){
		/**
		 * Remove Query Strings From Static Resources
		 */
		$parts = explode( '?ver', $src );
		return $parts[0];
	}
endif;