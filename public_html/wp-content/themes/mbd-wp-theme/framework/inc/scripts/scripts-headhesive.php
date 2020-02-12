<?php

/**
 * Headhesive
 */

if ( ! function_exists( 'baindesign324_enqueue_js_headhesive' ) ) :
	function baindesign324_enqueue_js_headhesive() {
	
	// Enqueue Headhesive vendor script

		if ( !is_admin() ) {
			wp_enqueue_script( 'baindesign324_enqueue_js_headhesive', get_template_directory_uri() . '/framework/assets/js/source/vendor/headhesive.min.js', array(), null, TRUE );
		}

		$inline_js = '
			jQuery(document).ready(function($){
			    // Options 
			    var options = { 
			      offset: 500 
			    } 
			 
			    // Check for masthead on the page
			    // If found, create a new instance of Headhesive.js 
			    // and pass in some options
			    if ($("#masthead").length) {
			      var header = new Headhesive("#masthead", options);
			    } 
			})
		';

		wp_add_inline_script('baindesign324_enqueue_js_headhesive', $inline_js);
	}
endif;