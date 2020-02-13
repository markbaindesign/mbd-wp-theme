<?php

/**
 * Disallow file editor
 */

if ( ! function_exists( 'baindesign324_disallow_file_editor' ) ) :
	function baindesign324_disallow_file_editor() {
		define ( 'DISALLOW_FILE_EDIT', true );
	}
endif;