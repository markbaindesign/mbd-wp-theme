<?php

add_action( 'admin_init', 'baindesign324_imagelink_setup', 10 );
add_action( 'admin_menu', 'baindesign324_remove_menu_pages', 10 );
add_action( 'after_setup_theme', 'baindesign324_acf_pro', 10 );
add_action( 'after_setup_theme', 'baindesign324_add_theme_support', 10 );
add_action( 'after_setup_theme', 'baindesign324_custom_image_sizes', 10 );
add_action( 'after_setup_theme', 'baindesign324_disallow_file_editor', 10 );
add_action( 'after_setup_theme', 'baindesign324_load_text_domain', 10 );
add_action( 'after_setup_theme', 'baindesign324_register_nav_menus', 10 );
add_action( 'after_setup_theme', 'baindesign324_remove_crap_from_head', 10 );
add_action( 'wp_ajax_load-filter', 'baindesign324_load_cat_posts', 10 );
add_action( 'wp_ajax_nopriv_load-filter', 'baindesign324_load_cat_posts', 10 );
add_action( 'wp_dashboard_setup', 'baindesign324_remove_dashboard_widgets', 10 );
add_action( 'wp_enqueue_scripts', 'baindesign324_enqueue_animation_styles', 20 );
add_action( 'wp_enqueue_scripts', 'baindesign324_enqueue_custom_js_twitter_feed', 90 );
add_action( 'wp_enqueue_scripts', 'baindesign324_enqueue_js_headhesive', 10 );
add_action( 'wp_enqueue_scripts', 'baindesign324_enqueue_mmenu_styles', 20 );
add_action( 'wp_enqueue_scripts', 'baindesign324_enqueue_scripts', 10 );
add_action( 'wp_enqueue_scripts', 'baindesign324_enqueue_styles', 10 );
add_action( 'wp_enqueue_scripts', 'baindesign324_enqueue_vendor_js_twitter_feed', 20 );
add_action( 'wp_head', 'baindesign324_cookie_notice', 25 );
add_action( 'wp_head', 'baindesign324_typekit', 10 );