<?php

if ( ! function_exists( 'baindesign324_menu_standard' ) ) :
	function baindesign324_menu_standard() { ?>
		<?php 
			wp_nav_menu( 
			array( 
					'theme_location' => 'primary', 
					'container' => 'ul', 
				) 
			); 
		?>
	<?php }
endif;