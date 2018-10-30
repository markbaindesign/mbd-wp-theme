<?php

if ( ! function_exists( 'baindesign324_footer_menu' ) ) :
	function baindesign324_footer_menu( ) { 
		wp_nav_menu( array( 
			'theme_location' => 'baindesign324_footer-menu', 
			'container' => 'ul', 
			'container_class' => '',
			'fallback_cb' => false
		) );
	}
endif;