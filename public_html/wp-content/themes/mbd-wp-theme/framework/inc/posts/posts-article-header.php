<?php

// TO DO
// Rename this to "post meta" and add tags, categories, etc

// Post Title
if (!function_exists('baindesign324_post_title')) :
	function baindesign324_post_title()
	{
		if ( is_search()){
			$post_title = 'Search results';
		} else {
			$post_title = esc_html( get_the_title() );
		}
		$content = '<h1 class="post__title">' . $post_title . '</h1>';
		return $content;
	}
endif;

// Post Author
if (!function_exists('baindesign324_post_author')) :
	function baindesign324_post_author()
	{
		$content = '<div class="post__author"><span class="post__author__by">';
		$content .= __('By ', '_baindesign');
		$content .= '</span><span class="post__author__name">';
		$content.= get_the_author();
		$content.= '</span></div>';
		return $content;
	}
endif;


// Post Date
if (!function_exists('bd324_get_post_date')) :
	function bd324_get_post_date()
	{
		$content = '<div class="post__date"><span class="post__date__published">';
		$content .= __('Published on ', '_baindesign');
		$content .= '</span><span class="post__date__date">';
		$content .= get_the_date();
		$content .= '</span></div>';

		return $content;
	}
endif;

// Get the title
if (!function_exists('bd324_get_the_title')) :
	function bd324_get_the_title( $post_id )
	{
		// Vars
		$title = '';
		$post_type = get_post_type();

		// var_dump($post_id);

		if ( is_search()){
			$title = 'Search results';
		} elseif ($post_type == 'teammembers'){
			$title = bd324_person_name( $post_id );
		} else {
			$title = get_the_title( $post_id );
		}
		return $title;
	}
endif;

// Get the meta
if (!function_exists('bd324_get_the_meta')) :
	function bd324_get_the_meta()
	{
		// Vars
		$meta = '';
		$post_type = get_post_type();

		if ($post_type == 'teammembers'){
			$meta = bd324_get_the_person_meta();
		} else {
			$meta = bd324_get_post_date();
			$meta.=baindesign324_post_author();
		}
		return $meta;
	}
endif;