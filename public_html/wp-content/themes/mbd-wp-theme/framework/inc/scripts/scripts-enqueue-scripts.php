<?php
if ( ! function_exists( 'baindesign324_enqueue_scripts' ) ) :
	function baindesign324_enqueue_scripts() { 
	    
	    if ( !is_admin() ) {

	        // WP Core
	        wp_enqueue_script( 'jquery' );

	        // Vendor   

	        wp_enqueue_script( 'baindesign324_lity', get_template_directory_uri() . '/framework/assets/js/source/vendor/lity.min.js', array(), null, TRUE );
	        wp_enqueue_script( 'baindesign324_aos', '//cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', array(), null, false );
	        wp_enqueue_script( 'baindesign324_slick', get_template_directory_uri() . '/framework/assets/js/source/vendor/slick.min.js', array( 'jquery' ), null, TRUE );
	        
	        // Custom
	        wp_enqueue_script( 'baindesign324_main', get_template_directory_uri() . '/framework/assets/js/source/custom/main.js', array(), null, TRUE );

	        // Localize Twitter feed
	        $baindesign324_enqueue_vendor_js_twitter_feed_id = get_theme_mod( 'baindesign324_enqueue_vendor_js_twitter_feed_id' );
	        $twitter_feed_id = array(
	            'twitter_id' => $baindesign324_enqueue_vendor_js_twitter_feed_id,
	        );
	        wp_localize_script( 'baindesign324_tweetFetcher', 'twitter_handle', $twitter_feed_id );

	        // Localize assets directory for use in main.js
	        $assets_dir = array( 'stylesheet_directory_uri' => get_template_directory_uri() );
	        wp_localize_script( 'baindesign324_main', 'directory_uri', $assets_dir );
	            
	    }

	}
endif;