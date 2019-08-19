<?php

/**
 * Add theme support
 */

if ( ! function_exists( 'baindesign324_add_theme_support' ) ) :
	function baindesign324_add_theme_support() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'html5', array('search-form','comment-form','gallery','caption','comment-list') );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
	}
endif;