<?php

if ( ! function_exists( 'baindesign324_body_classes' ) ) :
	function baindesign324_body_classes( $classes ) {

		$classes[] = 'baindesign';

		/*
		 * Since we used 'option' in add_setting arguments array
		 * we retrieve the value by using get_option function
		 */
		$baindesign324_settings = get_option( 'baindesign324_settings' );	
		
		$classes[] = $baindesign324_settings['layout_setting'];


		// Slider or grid layout
		if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
			$classes[] = 'slider';
		}
		elseif ( is_front_page() ) {
			$classes[] = 'grid';
		}

		// Add class based on cover image
		if ( get_post_meta( get_the_ID(), 'cover_image', true ) ) {
			
			$classes[] = 'cover-background-image';

		} else {
			$classes[] = 'cover-no-background-image';
		}

		// Add class based on cover content settings
		if ( 'dark' == get_post_meta( get_the_ID(), 'cover_content_color', true ) ) {
			
			$classes[] = 'cover-content-color-dark';

		} else {
			$classes[] = 'cover-content-color-light';
		}

		// A custom class, just for the heck of it!
		$classes[] = 'baindesign';

		// Header layout class
		// $classes[] = 'layout-masthead-standard';

		// Main Nav layout class
		$classes[] = 'layout-main-nav-collapse';	

		
		return $classes;

	}
endif;