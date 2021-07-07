<?php

/**
 * Toggle to fire mobile menu
 */
if (!function_exists('baindesign324_mmenu_toggle_static')) :
	function baindesign324_mmenu_toggle_static()
	{ ?>
		<a href="#offcanvas-main-nav" class="toggle toggle--menu" aria-hidden="false" title="<?php _e('Menu', '_baindesign'); ?>">
			<i class="toggle__icon toggle--menu__icon"></i>
			<span class="toggle__label toggle--menu__label"><?php _e('Menu', '_baindesign'); ?></span></a>
	<?php }
endif;

/**
 * Not sure what the difference is
 */
if (!function_exists('baindesign324_mmenu_toggle')) :
	function baindesign324_mmenu_toggle()
	{
		# This exists for the MMenu off-canvas menu
	?>
		<div id="offcanvas-nav-trigger-wrapper" class="nav-toggle">
			<a href="#offcanvas-main-nav" id="offcanvas-nav-trigger" class="svg-icon nav-toggle js-toggle default">
				<!-- id "menu-toggle" required by responsive-nav.js Using custom toggle so can be translated -->

				<span class="nav-toggle-label"><?php _e('Menu', '_baindesign'); ?></span>
			</a>
		</div>
	<?php
	}
endif;

/**
 * Toggle --menu -- animated
 */
if (!function_exists('baindesign324_mmenu_toggle_animated')) :
	function baindesign324_mmenu_toggle_animated()
	{ ?>
		<div id="offcanvas-nav-trigger-wrapper" class="nav-toggle nav-toggle--animated">
			<a href="#offcanvas-main-nav" class="mburger mburger--collapse toggle toggle--menu" aria-hidden="false" title="<?php _e('Menu', '_baindesign'); ?>">
				<div class="toggle--menu__icon">
					<b class="icon"></b>
					<b class="icon icon--middle"></b>
					<b class="icon"></b>
				</div>
				<span class="toggle__label toggle--menu__label"><?php _e('Menu', '_baindesign'); ?></span></a>
			</a>
		</div>
<?php	}
endif;
