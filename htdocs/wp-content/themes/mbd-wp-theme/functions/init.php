<?php
/**
 * _mbbasetheme theme init setup
 *
 * @package _mbbasetheme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 900; /* pixels */
}

if ( ! function_exists( '_mbbasetheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _mbbasetheme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _mbbasetheme, use a find and replace
	 * to change '_mbbasetheme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( '_mbdmaster', get_template_directory() . '/languages' );

	// Clean up the head
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );


	// Register nav menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'mbbasetheme' ),
	) );
	/*
	register_nav_menus( array(
		'footer' => __( 'Footer Menu', 'mbbasetheme' ),
	) );
	register_nav_menus( array(
		'work' => __( 'Work Menu', 'mbbasetheme' ),
	) );
	*/

	// Register Widget Areas
	// Function location: /functions/theme-functions.php
	add_action( 'widgets_init', 'mb_widgets_init' );

	// Execute shortcodes in widgets
	// add_filter('widget_text', 'do_shortcode');

	// Add Editor Style
	add_editor_style();

	// Prevent File Modifications
	define ( 'DISALLOW_FILE_EDIT', true );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Add Body Classes
	add_filter( 'body_class', 'mbdmaster_body_classes' );

	// Add Image Sizes
	// add_image_size( $name, $width = 0, $height = 0, $crop = false );
	/* add_image_size( 'golden', 344, 294, true );
	add_image_size( 'sq3', 328, 328, true ); // For use in a line of three squares
	add_image_size( 'square', 328, 328, true );
	add_image_size( 'two-cols', 382 ); 
	add_image_size( 'three-cols', 255 ); 
	add_image_size( 'rec', 676, 328, true );
	add_image_size( 'letterbox', 737, 328, true ); */
	add_image_size( 'latest-post', 428, 285, true );

	// Make custom sizes selectable from WordPress admin
	// Function location: /functions/theme-functions.php
	add_filter( 'image_size_names_choose', 'mbdmaster_custom_media_sizes' );

//	Remove <p> tags on images
	// Function location: /functions/theme-functions.php
	add_filter('the_content', 'mbdmaster_filter_ptags_on_images');

	// Remove default WordPress image sizes
	// Function location: /functions/theme-functions.php
	// add_filter('intermediate_image_sizes_advanced', 'mbdmaster_remove_default_image_sizes');

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( '_mbbasetheme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Remove Dashboard Meta Boxes
	// Function location: /functions/theme-functions.php
	add_action( 'wp_dashboard_setup', 'mb_remove_dashboard_widgets' );

	// Change Admin Menu Order
	// Function location: /functions/theme-functions.php
	add_filter( 'custom_menu_order', '__return_true' );
	add_filter( 'menu_order', 'mb_custom_menu_order' );

	// Hide Admin Areas that are not used
	// Function location: /functions/theme-functions.php
	add_action( 'admin_menu', 'mb_remove_menu_pages' );

	// Remove default link for images
	// Function location: /functions/theme-functions.php
	add_action( 'admin_init', 'mb_imagelink_setup', 10 );

	// Show Kitchen Sink in WYSIWYG Editor
	// Function location: /functions/theme-functions.php
	add_filter( 'tiny_mce_before_init', 'mb_unhide_kitchensink' );

	// Custom Search Form
	// Function location: /functions/inc/template-tags.php
	add_filter( 'get_search_form', 'mbdmaster_search_form' );

	// Comment Form -- HTML5 Placeholders
	add_filter( 'comment_form_default_fields', 'mbdmaster_comment_form' );

	//  Comment Field
	add_filter( 'comment_form_field_comment', 'mbdmaster_comment_field' );
	
	// Hide Admin Bar
	// Let's face it: it's ugly
	// add_filter( 'show_admin_bar', '__return_false' );

	// Enable support for HTML5 markup.
	add_theme_support( 'custom-header', array(
		'flex-width'    => true,
		'width'         => 980,
		'flex-height'    => true,
		'height'        => 200,
		'default-image' => get_stylesheet_directory_uri() . 'assets/images/logo.png',
	) );

	// Enable support for custom headers.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'gallery',
		//'caption',
		'comment-list'
	) );

	add_theme_support( 'custom-background', array(
	// Background color default
	'default-color' => '000',
	// Background image default
	'default-image' => get_template_directory_uri() . 'assets/images/office-hero.jpg'
) );

	// Enable support for Post Formats.
	// add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Enqueue scripts
	// Function location: /functions/theme-functions.php
	add_action( 'wp_enqueue_scripts', 'mbdmaster324_scripts' );
	add_action( 'wp_enqueue_scripts', 'baindesign324_scripts_mmenu' );

	// Remove Query Strings From Static Resources
	// Function location: /functions/theme-functions.php
	add_filter( 'script_loader_src', 'mb_remove_script_version', 15, 1 );
	add_filter( 'style_loader_src', 'mb_remove_script_version', 15, 1 );

	// Remove Read More Jump
	// Function location: /functions/theme-functions.php
	add_filter( 'the_content_more_link', 'mb_remove_more_jump_link' );

	// Typekit Webfonts Inline Script
	add_action( 'wp_head', 'mbdmaster324_typekit_inline' );

	// Load webfonts inline
	add_action( 'wp_head', 'baindesign324_load_webfonts' );

	/**
	 * Custom Readmore
	 */
	if ( ! function_exists( 'baindesign324_custom_ellipsis_replacement' ) ) :
		function baindesign324_custom_ellipsis_replacement() {
	  		return '...';
		}
	endif;
	add_filter('excerpt_more', 'baindesign324_custom_ellipsis_replacement');

	/**
	 * Custom Readmore
	 */
	if ( ! function_exists( 'baindesign324_custom_excerpt_readmore' ) ) :
		function baindesign324_custom_excerpt_readmore( $output ) {
			global $post;
			return $output . ' <a href="' . get_permalink( $post->ID ) . '" title="Read more"><span class="">Read more</span><i class="fa"></i></a>';
		}
	endif;

	add_filter( 'the_excerpt', 'baindesign324_custom_excerpt_readmore' );

}
endif; // _mbbasetheme_setup

add_action( 'after_setup_theme', '_mbbasetheme_setup' );