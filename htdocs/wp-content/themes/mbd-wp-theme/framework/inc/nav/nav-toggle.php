<?php

/**
 * Nav toggle
 */

if ( ! function_exists( 'baindesign324_nav_toggle' ) ) :
	function baindesign324_nav_toggle() {
	?>
		<a id="nav-toggle" class="nav-toggle js-toggle default"><!-- id "menu-toggle" required by responsive-nav.js Using custom toggle so can be translated -->
			<span type="button" role="button" aria-label="Toggle Navigation" class="nav-button lines-button menu-button si-icons si-icons-easing">
				<span class="si-icon si-icon-hamburger-cross" data-icon-name="hamburgerCross"></span>
			</span>
			<span class=""><?php _e( 'Menu', '_baindesign' ); ?></span>
		</a>
	<?php
}
endif;