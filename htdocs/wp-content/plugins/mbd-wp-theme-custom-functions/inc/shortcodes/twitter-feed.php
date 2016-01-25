<?php 
/* MBD Tweets Shortcode */

add_shortcode('mbd-twitter-feed', 'mbdmaster324_shortcode_twitter_feed');

function mbdmaster324_shortcode_twitter_feed( $atts ) {
	// Load scripts
		wp_enqueue_script( 'mbdmaster324_twitterfetcher', get_template_directory_uri() . '/assets/js/source/vendor/twitterFetcher.js', array(), '', TRUE );
		wp_enqueue_script( 'mbdmaster324_tweetFetcher', get_template_directory_uri() . '/assets/js/source/custom/tweetFetcher.js', array(), '', TRUE );

	// Get content template
	ob_start();
		echo '<div class="sidebar-twitter-feed">';
    		get_template_part( 'content', 'twitter-feed' );	
    	echo '</div>';
		$content =  ob_get_contents();
  	ob_clean();
  	
  	return $content; 
}

// [mbd-twitter-feed]