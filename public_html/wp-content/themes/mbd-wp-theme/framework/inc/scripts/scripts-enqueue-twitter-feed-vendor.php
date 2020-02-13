<?php

/**
 * Show latest tweets
 */

if ( ! function_exists( 'baindesign324_enqueue_vendor_js_twitter_feed' ) ) :
	function baindesign324_enqueue_vendor_js_twitter_feed() {
		if ( !is_admin() ) {
			wp_enqueue_script( 'baindesign324_twitter-feed-custom-js', get_template_directory_uri() . '/framework/assets/js/source/vendor/twitterFetcher_min.js', array(), null, TRUE );
		}
	}
endif;