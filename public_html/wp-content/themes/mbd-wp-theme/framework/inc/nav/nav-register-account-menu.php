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