<?php

/**
 *	Plug existing functions from the custom plugin
 */

remove_action( 'baindesign324_pre_header', 'baindesign324_menu_account', 50 );
remove_action( 'baindesign324_pre_header', 'baindesign324_social_links', 60 );
remove_action( 'baindesign324_header_top', 'baindesign324_mmenu_mhead', 5 );
remove_action( 'baindesign324_post_header', 'baindesign324_cover', 20  );
remove_action( 'baindesign324_pre_content', 'baindesign324_pre_content' );
// remove_action( 'baindesign324_pre_colophon', 'baindesign324_mailchimp_form', 20 );

add_action( 'baindesign324_pre_header', 'monochrome_preheader', 50 );
add_action( 'baindesign324_colophon', 'baindesign324_mailchimp_form', 15 );
// add_action( 'baindesign324_pre_colophon', 'monochrome_site_nav', 25 );

function monochrome_preheader() {
	echo 'monochrome rules!';
}

function monochrome_site_nav() { ?>
	<div>
		<div>One</div>
		<div>Two</div>
		<div>Three</div>
	</div>
<?php }
