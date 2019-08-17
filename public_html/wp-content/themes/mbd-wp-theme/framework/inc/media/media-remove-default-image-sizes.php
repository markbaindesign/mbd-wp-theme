<?php

if ( ! function_exists( 'baindesign324_remove_default_image_sizes' ) ) :
	function baindesign324_remove_default_image_sizes( $sizes) {
	    unset( $sizes['thumbnail']);
	    unset( $sizes['medium']);
	    unset( $sizes['large']);
	     
	    return $sizes;
	}
endif;