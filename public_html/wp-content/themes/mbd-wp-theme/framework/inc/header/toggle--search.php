<?php

/**
 * Search toggle
 */

if (!function_exists('baindesign324_toggle_search')) :
	function baindesign324_toggle_search()
	{ ?>
		<a href="<?php get_site_url(); ?>/?s" id="search-toggle" class="toggle toggle--search" aria-hidden="false" title="<?php _e('Search this site', '_baindesign'); ?>">
			<i></i>
			<span><?php _e('Search', '_baindesign'); ?></span>
		</a>
<?php  }
endif;
