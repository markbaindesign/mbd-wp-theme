<?php

/**
 * Generic Wrapper 2
 */
if (!function_exists('baindesign324_generic_wrapper_2')) :
	function baindesign324_generic_wrapper_2(
		array $classes = NULL,  	// An array of post classes
		$return = TRUE,			// Return or echo?
		$content = NULL,				// The content to wrap
		$data_aos = NULL,
		$data_aos_duration = NULL
	) {
		// Vars
		$wrapper = '';

		// Add "section" class to 
		// start of array
		array_unshift($classes, 'section');

		// Convert the array into a string
		$post_classes = esc_attr(implode(" ", $classes));

		// Output
		$wrapper .= '<div class="' . $post_classes . '"';
		if (isset($data_aos)) {
			$wrapper .= ' data-aos="' . $data_aos . '"';
		}
		$wrapper .= '>';
		$wrapper .= '<div class="container">';
		$wrapper .= $content;
		$wrapper .= '</div>';
		$wrapper .= '</div>';

		// Return or print?
		if ($return == TRUE) {
			return $wrapper;
		} else {
			print $wrapper;
		}
	}
endif;

/**
 * Generic Wrapper
 */
if (!function_exists('baindesign324_generic_wrapper')) :
	function baindesign324_generic_wrapper(
		$id = NULL, 				// Basically for single posts
		array $classes = NULL,  // An array of post classes
		$position = NULL,			// To close wrapper
		$return = 'false',			// Return or echo?
		$data_aos = NULL,
		$data_aos_duration = NULL
	) {
		$content = '';
		if ($position == 'close') {
			$content .= '</div></div>';
		} else {
			// Add "section" class to 
			// start of array
			array_unshift($classes, 'section');

			// Convert the array into a string
			$post_classes = esc_attr(implode(" ", $classes));
			// var_dump($post_classes);

			$content .= '<div class="' . $post_classes . '"';
			if (isset($data_aos)) {
				$content .= ' data-aos="' . $data_aos . '"';
			}
			if (isset($data_aos_duration)) {
				$content .= ' data-aos-once="true" data-aos-duration="' . $data_aos_duration . '"';
			}
			$content .= '>';
			$content .= '<div class="container">';
		}
		if ($return == 'true') {
			return $content;
		} else {
			print $content;
		}
	}
endif;

/**
 * Generic Open Wrapper
 */
if (!function_exists('baindesign324_generic_wrapper_open( $class )')) :
	function baindesign324_generic_wrapper_open($class)
	{
		echo '<div class="section ' . $class . '"><div class="container">';
	}
endif;

/**
 * Generic Close Wrapper
 */
if (!function_exists('baindesign324_generic_wrapper_close( $class )')) :
	function baindesign324_generic_wrapper_close($class)
	{
		echo '</div></div><!-- .' . $class . ' -->';
	}
endif;


/**
 * baindesign324_sitewrapper_open
 */
if (!function_exists('baindesign324_sitewrapper_open')) :
	function baindesign324_sitewrapper_open()
	{
		# This exists for the MMenu off-canvas menu
		echo '<div id="site-wrapper">';
	}
endif;

/**
 * baindesign324_sitewrapper_close
 */
if (!function_exists('baindesign324_sitewrapper_close')) :
	function baindesign324_sitewrapper_close()
	{
		echo '</div><!-- #site-wrapper -->';
	}
endif;

/**
 * Preheader Open Wrapper
 */
if (!function_exists('baindesign324_pre_header_wrapper_open')) :
	function baindesign324_pre_header_wrapper_open()
	{
		echo '<header id="preheader" class="section"><div class="container">';
	}
endif;

/**
 * Preheader Close Wrapper
 */
if (!function_exists('baindesign324_pre_header_wrapper_close')) :
	function baindesign324_pre_header_wrapper_close()
	{
		echo '</div></header>';
	}
endif;

/**
 * Header Top Open Wrapper
 */
if (!function_exists('baindesign324_header_top_wrapper_open')) :
	function baindesign324_header_top_wrapper_open()
	{
		echo '<header id="masthead" class="site-header section" role="banner" data-aos-once="true" data-aos="fade-in" data-aos-duration="500"><div class="container">';
	}
endif;

/**
 * Header Top Close Wrapper
 */
if (!function_exists('baindesign324_header_top_wrapper_close')) :
	function baindesign324_header_top_wrapper_close()
	{
		echo '</div></header>';
	}
endif;

/**
 * Header Bottom Open Wrapper
 */
if (!function_exists('baindesign324_header_bottom_wrapper_open')) :
	function baindesign324_header_bottom_wrapper_open()
	{
		echo '<header id="header-bottom" class="section"><div class="container">';
	}
endif;

/**
 * Header Bottom Close Wrapper
 */
if (!function_exists('baindesign324_header_bottom_wrapper_close')) :
	function baindesign324_header_bottom_wrapper_close()
	{
		echo '</div></header>';
	}
endif;

/**
 * Page Intro Open Wrapper
 */
if (!function_exists('baindesign324_page_intro_wrapper_open')) :
	function baindesign324_page_intro_wrapper_open()
	{
		echo '<div id="post-header" class="section"><div class="container">';
	}
endif;

/**
 * Article Meta Open Wrapper
 */
if (!function_exists('baindesign324_article_meta_wrapper_open')) :
	function baindesign324_article_meta_wrapper_open()
	{
		echo '<div class="meta section"><div class="container">';
	}
endif;

/**
 * Featured Post Open Wrapper
 */
if (!function_exists('baindesign324_featured_post_wrapper_open')) :
	function baindesign324_featured_post_wrapper_open()
	{
		echo '<div class="featured-post section"><div class="container">';
	}
endif;

/**
 * Pre-comments Open Wrapper
 */
if (!function_exists('baindesign324_pre_comments_wrapper_open')) :
	function baindesign324_pre_comments_wrapper_open()
	{
		echo '<div class="pre-comments section"><div class="container">';
	}
endif;
