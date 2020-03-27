<?php

/**
 * Register nav menus
 */

if ( ! function_exists( 'baindesign324_register_nav_menus' ) ) :
	function baindesign324_register_nav_menus() {
		register_nav_menus( array('primary' => __( 'Primary Menu', '_baindesign' ) ) );
		register_nav_menus( array('baindesign_secondary_menu' => __( 'Secondary Menu', '_baindesign' ) ) );
		register_nav_menus( array('baindesign_footer_menu' => __( 'Footer Menu', '_baindesign' ) ) );
		register_nav_menus( array('baindesign_account_menu' => __( 'Account', '_baindesign' ) ) );
		register_nav_menus( array('baindesign_smallprint_menu' => __( 'Smallprint', '_baindesign' ) ) );
}
endif;