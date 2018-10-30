<?php

/**
 * baindesign324_mmenu_toggle_static
 */

if ( ! function_exists( 'baindesign324_mmenu_toggle_static' ) ) :
	function baindesign324_mmenu_toggle_static() {
		# This exists for the MMenu off-canvas menu
		?>

		<div id="offcanvas-nav-trigger" class="nav-toggle sticky background-check">
			<a href="#offcanvas-main-nav" id="offcanvas-nav-trigger" class="nav-toggle js-toggle default" aria-hidden="false" title="<?php _e('Menu', '_baindesign'); ?>">	
				<span class="nav-toggle-label"><?php _e('Menu', '_baindesign'); ?></span> <i class="fa fa-2x fa-navicon"></i>
			</a>
		</div>
		<?php
	}
endif;