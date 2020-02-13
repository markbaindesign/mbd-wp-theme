<?php

/**
 * Overrule existing theme functions here. 
 * 
 * Example: 
 * 
 *  add_action( 'baindesign324_pre_header', 'my_custom_preheader', 50 );
 * 
 * function my_custom_preheader() {
 *	    echo 'My custom preheader!';
 * }
 * 
 */

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