<?php
if ( ! function_exists( 'baindesign324_menu_account' ) ) :
	function baindesign324_menu_account() {
		wp_nav_menu( 
			array( 
				'theme_location' => 'baindesign_account_menu', 
				'container' => 'ul', 
				'menu_class' => 'menu menu_account',
			) 
		); 
	}
endif;

if ( ! function_exists( 'baindesign324_menu_secondary' ) ) :
	function baindesign324_menu_secondary() {
		echo '<h5>Menu</h5>';
		wp_nav_menu( 
			array( 
				'theme_location' => 'baindesign_secondary_menu', 
				'container' => 'ul', 
				'menu_class' => 'menu menu--secondary',
			) 
		); 
	}
endif;