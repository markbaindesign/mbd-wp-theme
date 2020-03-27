<?php

add_action('admin_init', 'baindesign324_imagelink_setup', 10);
add_action('admin_menu', 'baindesign324_remove_menu_pages', 10);
add_action('after_setup_theme', 'baindesign324_acf_pro', 10);
add_action('after_setup_theme', 'baindesign324_add_theme_support', 10);
add_action('after_setup_theme', 'baindesign324_custom_image_sizes', 10);
add_action('after_setup_theme', 'baindesign324_disallow_file_editor', 10);
add_action('after_setup_theme', 'baindesign324_load_text_domain', 10);
add_action('after_setup_theme', 'baindesign324_register_cpt_project', 10);
add_action('after_setup_theme', 'baindesign324_register_cpt_testimonial', 10);
add_action('after_setup_theme', 'baindesign324_register_nav_menus', 10);
add_action('after_setup_theme', 'baindesign324_remove_crap_from_head', 10);
add_action('wp_ajax_load-filter', 'baindesign324_load_cat_posts', 10);
add_action('wp_ajax_nopriv_load-filter', 'baindesign324_load_cat_posts', 10);
add_action('wp_dashboard_setup', 'baindesign324_remove_dashboard_widgets', 10);
add_action('wp_enqueue_scripts', 'baindesign324_enqueue_animation_styles', 20);

/**
 * ==========================
 * Styles
 * ==========================
 */

// Prototype styles
add_action('wp_enqueue_scripts',       'bd324_enqueue_fp_styles',                     999);

add_action('wp_enqueue_scripts',      'baindesign324_enqueue_js_responsive_nav',      10);

// baguetteBox.js Gallery Lightbox
add_action('wp_enqueue_scripts',      'baindesign324_enqueue_style_baguettebox',      10);

// Theme styles
// Load latest to overrule others
add_action('wp_enqueue_scripts',      'baindesign324_enqueue_styles',                 99);

/**
 * ==========================
 * Scripts - Vendor
 * ==========================
 */

// JS toggles
add_action('wp_enqueue_scripts', 'bd324_enqueue_script_toggle', 10);

// Headhesive
add_action('wp_enqueue_scripts', 'baindesign324_enqueue_js_headhesive', 10);

// baguetteBox.js Gallery Lightbox
add_action('wp_enqueue_scripts', 'bd324_enqueue_script_baguettebox', 10);

// add_action( 'wp_enqueue_scripts', 'baindesign324_enqueue_mmenu_styles', 20 );
add_action('wp_enqueue_scripts', 'baindesign324_enqueue_scripts', 10);


/**
 * Scripts - Custom Configs
 */

// Back to top scroll
add_action('wp_enqueue_scripts', 'bd324_enqueue_script_back_to_top', 200);
// Headhesive
add_action('wp_enqueue_scripts', 'baindesign324_enqueue_js_headhesive_config', 200);

// baguetteBox.js Gallery Lightbox
add_action('wp_enqueue_scripts', 'bd324_enqueue_script_baguettebox_config', 200);


// Twitter feed
add_action('wp_enqueue_scripts', 'baindesign324_enqueue_vendor_js_twitter_feed', 20);
add_action('wp_enqueue_scripts', 'baindesign324_enqueue_custom_js_twitter_feed', 25);

// mmenu
add_action('wp_enqueue_scripts', 'baindesign324_enqueue_mmenu', 20);
add_action('wp_enqueue_scripts', 'baindesign324_enqueue_mmenu_config', 25);
add_action('wp_enqueue_scripts', 'baindesign324_enqueue_mmenu_hamburger', 30);

// Cookie notice
add_action('wp_head', 'baindesign324_cookie_notice', 25);

// Typekit
add_action('wp_head', 'bd324_typekit', 10);

// Font Face Observer
// Not required with Typekit / Google Fonts
add_filter('body_class', 'bd324_font_face_observer_classes', 10);
add_action('wp_enqueue_scripts', 'bd324_font_face_observer_scripts', 30);
