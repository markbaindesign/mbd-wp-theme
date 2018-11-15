<?php

/**
 *	Plug existing functions from the custom plugin
 */

remove_action( 'baindesign324_pre_header', 'baindesign324_menu_account', 50 );
remove_action( 'baindesign324_pre_header', 'baindesign324_social_links', 60 );
remove_action( 'baindesign324_header_top', 'baindesign324_mmenu_mhead', 5 );
remove_action( 'baindesign324_post_header', 'baindesign324_cover', 20  );
remove_action( 'baindesign324_pre_content', 'baindesign324_pre_content' );
remove_action( 'baindesign324_pre_colophon', 'baindesign324_mailchimp_form', 20 );
remove_action( 'baindesign324_pre_comments', 'baindesign324_comments', 50 );
remove_action( 'baindesign324_pre_colophon', 'baindesign324_pre_colophon_mailchimp_form', 20 );
remove_action( 'baindesign324_pre_comments', 'baindesign324_social_sharing', 30 );
remove_action( 'baindesign324_header_bottom', 'baindesign324_header_bottom_wrapper_open', 10 );
remove_action( 'baindesign324_header_bottom', 'baindesign324_cover', 20 );
remove_action( 'baindesign324_header_bottom', 'baindesign324_header_bottom_wrapper_close', 100 );

add_action( 'baindesign324_pre_header', 'monochrome_preheader', 50 );
add_action( 'baindesign324_colophon', 'baindesign324_mailchimp_form', 15 );
// add_action( 'baindesign324_pre_colophon', 'monochrome_site_nav', 25 );

function monochrome_preheader() {
	echo 'monochrome rules!';
}

/** 
 * Existing functions should be overruled in the 
 * custom plugin!
 */