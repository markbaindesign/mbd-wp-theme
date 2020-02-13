<?php

/**
 * ACF Pro config
 */

if ( ! function_exists( 'baindesign324_acf_pro' ) ) :
	function baindesign324_acf_pro() {
	// 1. customize ACF path
	add_filter('acf/settings/path', 'my_acf_settings_path');
	 
	function my_acf_settings_path( $path ) {
	 
	    // update path
	    $path = get_template_directory() . '/framework/assets/acf/advanced-custom-fields-pro/';
	    
	    // return
	    return $path;
	    
	}
	 

	// 2. customize ACF dir
	add_filter('acf/settings/dir', 'my_acf_settings_dir');
	 
	function my_acf_settings_dir( $dir ) {
	 
	    // update path
	    $dir = get_template_directory_uri() . '/framework/assets/acf/advanced-custom-fields-pro/';
	    
	    // return
	    return $dir;
	    
	}
	 

	// 3. Hide ACF field group menu item
	// add_filter('acf/settings/show_admin', '__return_false');


	// 4. Include ACF
	include_once( get_template_directory() . '/framework/assets/acf/advanced-custom-fields-pro/acf.php' );

	// Add options page
	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' 	=> 'Theme Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
	}
}
endif;