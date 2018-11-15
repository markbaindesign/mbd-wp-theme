<?php

/**
 * This file should be used to create chunks of markup
 * based on the wrapper functions.
 *
 * It's expected that most of the work is going to be
 * done in the custom functions, but here are some 
 * examples. 
 * 
 * Doing this means we can write functions that are 
 * independent of where the are called in the theme. 
 * 
 */

/**
 * Create .section + .container markup for a Mailchimp form
 */
if ( ! function_exists( 'baindesign324_pre_colophon_mailchimp_form' ) ) :
	function baindesign324_pre_colophon_mailchimp_form() {
		// Add the above function via a template hook
		$class='form__mailchimp__full';
		baindesign324_generic_wrapper_open($class);
		baindesign324_mailchimp_form();
		baindesign324_generic_wrapper_close($class);
	}
endif;

/**
 * Create .section + .container markup for a Contact 7 form
 */

if ( ! function_exists( 'baindesign324_form_contact' ) ) :
	function baindesign324_form_contact() {
		// Add the above function via a template hook
		$class='contact-form';
		baindesign324_generic_wrapper_open($class);
		do_shortcode( '[contact-form-7 id="1364" title="Basic Contact Form"]' );
		baindesign324_generic_wrapper_close($class);
	}
endif;