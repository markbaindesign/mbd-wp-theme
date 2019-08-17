<?php

/**
 * Add filters
 */

if ( ! function_exists( 'baindesign324_add_filters' ) ) :
	function baindesign324_add_filters() {
		add_filter( 'body_class', 'baindesign324_body_classes' );
		add_filter( 'excerpt_more', 'baindesign324_custom_ellipsis_replacement');
		add_filter( 'image_size_names_choose', 'baindesign324_custom_media_sizes' );
		add_filter( 'intermediate_image_sizes_advanced', 'baindesign324_remove_default_image_sizes' );
		add_filter( 'the_content', 'baindesign324_filter_ptags_on_images' );
		add_filter( 'custom_menu_order', '__return_true' );
		add_filter( 'menu_order', 'baindesign324_custom_menu_order' );
		add_filter( 'the_excerpt', 'baindesign324_custom_excerpt_readmore' );
		add_filter( 'tiny_mce_before_init', 'baindesign324_unhide_kitchensink' );
		add_filter( 'get_search_form', 'baindesign324_search_form' );
		add_filter( 'comment_form_default_fields', 'baindesign324_comment_form' );
		add_filter( 'comment_form_field_comment', 'baindesign324_comment_field' );
		add_filter( 'show_admin_bar', '__return_false' );
		add_filter( 'script_loader_src', 'baindesign324_remove_script_version', 15, 1 );
		add_filter( 'style_loader_src', 'baindesign324_remove_script_version', 15, 1 );
		add_filter( 'the_content_more_link', 'baindesign324_remove_more_jump_link' );
		add_filter( 'widget_text', 'do_shortcode' );
	}
endif;