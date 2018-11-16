<?php

if ( ! function_exists( 'baindesign324_prefix_nav_description' ) ) :
	function baindesign324_prefix_nav_description( $item_output, $item, $depth, $args ) {
	    if ( !empty( $item->description ) && ! $depth ) {
	        $item_output = str_replace( $args->link_after . '</a>', '<p class="menu-item-description">' . $item->description . '</p>' . $args->link_after . '</a>', $item_output );
	    }
	 
	    return $item_output;
	}
endif;