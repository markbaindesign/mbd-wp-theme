<?php 
	include_once('CPT.php');

	// Work CPT

	// create work custom post type
	$work = new CPT(array(
	    'post_type_name' => 'work',
	    'singular' => 'Work',
	    'plural' => 'Work',
	    'slug' => 'work'
	), array(
	    'supports' => array( 'author', 'title', 'editor', 'thumbnail', 'excerpt', 'comments'),
	    'has_archive'        => true,
	    'capability_type'    => 'post',
	    'show_in_menu'       => true,
	));

	   // use  icon for post type
	   $work->menu_icon("dashicons-portfolio");
	   $work->register_taxonomy( 'type' );
	   $work->register_taxonomy( 'tag' );

	/*
	 * Testimonial CPT
	 */

	// create testimonial custom post type
	$testimonial = new CPT(array(
	    'post_type_name' => 'testimonial',
	    'singular' => 'Testimonial',
	    'plural' => 'Testimonials',
	    'slug' => 'testimonials'
	), array(
	    'supports' => array( 'author', 'title', 'editor', 'thumbnail', 'excerpt', 'comments'),
	    'has_archive'        => true,
	    'capability_type'    => 'post',
	    'show_in_menu'       => true,
	));

	// use  icon for post type
	$testimonial->menu_icon("dashicons-format-quote");
?>