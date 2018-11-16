<?php

if ( ! function_exists( 'baindesign324_twitter_feed' ) ) :
	function baindesign324_twitter_feed() {
		//
		// TODO
		//
		// => replace with function
		if ( get_theme_mod( 'baindesign324_twitter_feed_id' ) ) {
			get_template_part( 'modules/twitter-feed' );
		}
	}
endif;