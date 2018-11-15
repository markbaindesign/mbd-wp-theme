<?php

if ( ! function_exists( 'baindesign324_unhide_kitchensink' ) ) :
	function baindesign324_unhide_kitchensink( $args ) {
		$args['wordpress_adv_hidden'] = false;
		return $args;
	}
endif;