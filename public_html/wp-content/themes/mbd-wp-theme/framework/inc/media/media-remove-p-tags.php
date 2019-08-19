<?php

if ( ! function_exists( 'baindesign324_filter_ptags_on_images' ) ) :
	function baindesign324_filter_ptags_on_images($content){
		/**
		 * Remove default <p> tag on images
		 */
	   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	}
endif;