<?php

/**
 * Use with core WordPress hooks
 * Functions should be added to custom theme hooks
 * in /hooks.php
 */

add_action( 'admin_init', 'baindesign324_imagelink_setup', 10 );
add_action( 'admin_menu', 'baindesign324_remove_menu_pages', 10 );
add_action( 'widgets_init', 'baindesign324_widgets_init', 10 );
add_action( 'wp_ajax_nopriv_load-filter', 'baindesign324_load_cat_posts', 10 );
add_action( 'wp_ajax_load-filter', 'baindesign324_load_cat_posts', 10 );
add_action( 'wp_dashboard_setup', 'baindesign324_remove_dashboard_widgets', 10 );
add_action( 'wp_enqueue_scripts', 'baindesign324_enqueue_styles', 10 );
add_action( 'wp_enqueue_scripts', 'baindesign324_enqueue_scripts', 10 );
add_action( 'wp_head', 'baindesign324_cookie_notice', 25 );
add_action( 'wp_head', 'baindesign324_typekit_inline', 10 );
add_action( 'wp_head', 'baindesign324_load_webfonts', 10 );

/**
 * Functions should either be overruled with a new action
 * or removed using remove_action. Do no comment out or 
 * delete from this file. 
 * See codex.wordpress.org/Function_Reference/remove_action
 */

 