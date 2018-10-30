<?php

if ( ! function_exists( 'baindesign324_menu_standard' ) ) :
	function baindesign324_menu_standard() { ?>
		<div id="main-nav-wrapper">
			<nav id="main-navigation-menu" class="nav-collapse main-navigation">
				<?php 
					wp_nav_menu( 
					array( 
							'theme_location' => 'primary', 
							'container' => 'ul', 
						) 
					); 
				?>
			</nav><!-- .nav-collapse .main-navigation -->
		</div>
	<?php }
endif;