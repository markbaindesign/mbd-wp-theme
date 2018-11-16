<?php

if ( ! function_exists( 'baindesign324_custom_media_sizes' ) ) :
	function baindesign324_custom_media_sizes( $sizes ) {
    return array_merge( $sizes, array(
		  'two-cols' => __('Two Column Layout'),
		  'three-cols' => __('Three Column Layout'),
    ) );
 }
endif;