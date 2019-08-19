<?php

/**
 * Load text domain
 */

if ( ! function_exists( 'baindesign324_load_text_domain' ) ) :
	function baindesign324_load_text_domain() {
		load_theme_textdomain( '_baindesign324', get_template_directory() . '/languages' );
	}
endif;