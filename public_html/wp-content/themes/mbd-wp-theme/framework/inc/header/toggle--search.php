<?php
/**
 * Search toggle
 */

if ( ! function_exists( 'baindesign324_toggle_search' ) ) :
	function baindesign324_toggle_search() { ?>
		<a href="<?php get_site_url(); ?>/?s" class="toggle toggle--search" aria-hidden="false" title="<?php _e('Search this site', '_baindesign'); ?>"><?php _e('Search', '_baindesign'); ?></a>
	<?php  }
endif;