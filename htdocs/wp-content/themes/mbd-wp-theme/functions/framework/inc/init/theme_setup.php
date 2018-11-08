<?php

if ( ! function_exists( 'baindesign324_theme_setup' ) ) :

	function baindesign324_theme_setup() {

		load_theme_textdomain( '_baindesign324', get_template_directory() . '/languages' );
		require get_template_directory() . '/functions/framework/inc/init/add_image_size.php';
		require get_template_directory() . '/functions/framework/inc/init/add_theme_support.php';
		require get_template_directory() . '/functions/framework/inc/init/register_nav_menus.php';
		require get_template_directory() . '/functions/framework/inc/init/remove_action.php';
		require get_template_directory() . '/functions/framework/inc/init/add_action.php';
		require get_template_directory() . '/functions/framework/inc/init/add_filter.php';
		require get_template_directory() . '/functions/framework/inc/init/acf-bundled.php';
		define ( 'DISALLOW_FILE_EDIT', true );
		// add_editor_style();
	}
endif;
add_action( 'after_setup_theme', 'baindesign324_theme_setup' );