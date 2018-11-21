<?php

// TODO refactor this

if ( ! function_exists( 'baindesign324_theme_setup' ) ) :

	function baindesign324_theme_setup() {

		define ( 'DISALLOW_FILE_EDIT', true );
		// add_editor_style();
	}
endif;
add_action( 'after_setup_theme', 'baindesign324_theme_setup' );