<?php
if ( ! function_exists( 'baindesign324_comments' ) ) :
	function baindesign324_comments() {
		if ( ( comments_open() || '0' != get_comments_number() ) && ( in_array( get_post_type(), array( 'post' ) ) ) ) :
			comments_template();
		endif;
	}
endif;