<?php

/**
 * Remove crap from head
 */

if ( ! function_exists( 'baindesign324_remove_crap_from_head' ) ) :
	function baindesign324_remove_crap_from_head() {
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	}
endif;

