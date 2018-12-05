<?php

/**
 * Testimonial CPT
 */

use PostTypes\PostType;

if ( ! function_exists( 'baindesign324_register_cpt_testimonial' ) ) :
	function baindesign324_register_cpt_testimonial() {
	$names = [
	    'name' => 'testimonial',
	    'singular' => __('Testimonial'),
	    'plural' => __('Testimonials'),
	    'slug' => __('testimonials'),
	];
	$options = [
	    'supports' 	=> array( 'title', 'editor', 'excerpt', 'thumbnail' ),
	    'has_archive' => true,
	    'hierarchical' => false,
	    'capability_type' => 'page',
	    'show_in_menu' => true,
	];
	$content = new PostType($names,$options);
	$content->icon("dashicons-thumbs-up");
	$content->columns()->hide(['date']);
	$content->register();
}
endif;