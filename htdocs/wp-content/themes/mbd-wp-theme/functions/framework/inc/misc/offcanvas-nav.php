<?php

if ( ! function_exists( 'baindesign324_offcanvas_nav' ) ) :

	function baindesign324_offcanvas_nav() { ?>
		<nav id="offcanvas-main-nav">
			<?php 
				wp_nav_menu( 
				array( 
						'theme_location' => 'primary'
					) 
				); 
			?>
		</nav>
	<?php }
endif;