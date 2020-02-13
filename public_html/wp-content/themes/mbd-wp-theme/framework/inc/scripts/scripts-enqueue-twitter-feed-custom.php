<?php

/**
 * Twitter feed config
 */

if ( ! function_exists( 'baindesign324_enqueue_custom_js_twitter_feed' ) ) :
	function baindesign324_enqueue_custom_js_twitter_feed() {
	if ( !is_admin() ) {
		wp_enqueue_script( 'baindesign324_twitter-feed-vendor-js', get_template_directory_uri() . '/framework/assets/js/source/custom/tweetFetcher.js', array(), null, TRUE );
	}
}
endif;