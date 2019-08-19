<?php

/**
 *	Plug existing functions from the custom plugin
 */

remove_action( 'baindesign324_header_bottom', 'baindesign324_cover', 20 );
remove_action( 'baindesign324_header_bottom', 'baindesign324_header_bottom_wrapper_close', 100 );
remove_action( 'baindesign324_header_bottom', 'baindesign324_header_bottom_wrapper_open', 10 );
remove_action( 'baindesign324_header_top', 'baindesign324_mmenu_mhead', 5 );
remove_action( 'baindesign324_header_top', 'baindesign324_mmenu_mhead', 5 );
remove_action( 'baindesign324_header_top', 'baindesign324_mmenu_toggle', 40 );
remove_action( 'baindesign324_post_header', 'baindesign324_cover', 20  );
remove_action( 'baindesign324_pre_colophon', 'baindesign324_mailchimp_form', 20 );
remove_action( 'baindesign324_pre_colophon', 'baindesign324_pre_colophon_mailchimp_form', 20 );
remove_action( 'baindesign324_pre_comments', 'baindesign324_comments', 50 );
remove_action( 'baindesign324_pre_comments', 'baindesign324_social_sharing', 30 );
remove_action( 'baindesign324_pre_content', 'baindesign324_pre_content' );
remove_action( 'baindesign324_pre_header', 'baindesign324_menu_account', 50 );
remove_action( 'baindesign324_pre_header', 'baindesign324_social_links', 60 );

add_action( 'baindesign324_pre_header', 'monochrome_preheader', 50 );
add_action( 'baindesign324_pre_colophon', 'monochrome_contact_section', 20 );
add_action( 'baindesign324_colophon', 'baindesign324_mailchimp_form', 15 );

function monochrome_preheader() {
	echo 'monochrome rules!';
}

function monochrome_contact_section() { ?>
	<div class="contact__section">
		<div class="contact__container">
			<div class="contact__image"></div>
			<div class="contact__content">
				<h2>Contact me</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
<?php }

/** 
 * Existing functions should be overruled in the 
 * custom plugin!
 */