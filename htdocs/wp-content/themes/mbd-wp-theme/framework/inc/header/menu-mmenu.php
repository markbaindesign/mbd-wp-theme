<?php

/**
 * Not sure what the difference is
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

/**
 * Not sure what the difference is
 */
if ( ! function_exists( 'baindesign324_mmenu_toggle' ) ) :
	function baindesign324_mmenu_toggle() {
		# This exists for the MMenu off-canvas menu
		?>
		<div id="offcanvas-nav-trigger-wrapper" class="nav-toggle">
			<a href="#offcanvas-main-nav" id="offcanvas-nav-trigger" class="svg-icon nav-toggle js-toggle default"><!-- id "menu-toggle" required by responsive-nav.js Using custom toggle so can be translated -->

				<span class="nav-toggle-label"><?php _e( 'Menu', '_baindesign' ); ?></span>
			</a>
		</div>
		<?php
	}
endif;