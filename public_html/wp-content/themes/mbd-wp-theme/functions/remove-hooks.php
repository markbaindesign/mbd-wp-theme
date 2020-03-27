<?php

/**
 * Pre-header
 */
remove_action('baindesign324_pre_header', 'baindesign324_pre_header_wrapper_open', 10);
remove_action('baindesign324_pre_header', 'baindesign324_menu_account', 50);
remove_action('baindesign324_pre_header', 'baindesign324_social_links', 60);
remove_action('baindesign324_pre_header', 'baindesign324_pre_header_wrapper_close', 100);

/**
 * Header
 */

// Remove standard header menu
// remove_action('baindesign324_header_top', 'baindesign324_menu_standard', 30);

// Remove default "project" CPT
remove_action('after_setup_theme', 'baindesign324_register_cpt_project', 10);

// Remove default cookie notice
// Replace with JS
remove_action('wp_head', 'baindesign324_cookie_notice', 25);

// Remove duplicate off-canvas menu
// trigger. 
remove_action('baindesign324_header_top', 'baindesign324_mmenu_toggle', 40);
remove_action('baindesign324_header_top', 'baindesign324_mmenu_toggle_static', 40);

/**
 * Colophon
 */
remove_action( 'baindesign324_colophon', 'baindesign324_footer_logo', 50 );
remove_action( 'baindesign324_colophon', 'baindesign324_footer_menu', 10 );
remove_action( 'baindesign324_colophon', 'baindesign324_site_info_copyright', 40 );
remove_action( 'baindesign324_colophon', 'baindesign324_site_info_design_credit', 30 );
remove_action( 'baindesign324_colophon', 'baindesign324_social_links', 20 );
remove_action( 'baindesign324_colophon', 'baindesign324_back_to_top', 60 );

// Remove footer menu
remove_action('baindesign324_colophon', 'baindesign324_footer_menu', 10);



// Remove the default scripts
// Roll my own
// remove_action( 'wp_enqueue_scripts', 'baindesign324_enqueue_scripts', 10 );

// Remove next event section
remove_action('baindesign324_front_page', 'baindesign324_template_next_event', 30);

/**
 * Search
 */
remove_action( 'baindesign324_header_top', 'baindesign324_toggle_search', 60 );

// Remove mhead
remove_action('baindesign324_header_top', 'baindesign324_mmenu_mhead', 5);

// Remove article header
// remove_action( 'baindesign324_primary_before', 'bd324_show_article_header', 20 );

// Remove pre-comments
remove_action('baindesign324_pre_comments', 'baindesign324_comments', 50);
remove_action('baindesign324_pre_comments', 'baindesign324_generic_wrapper_close', 40);
remove_action('baindesign324_pre_comments', 'baindesign324_post_tags', 20);
remove_action('baindesign324_pre_comments', 'baindesign324_pre_comments_wrapper_open', 10);
remove_action('baindesign324_pre_comments', 'baindesign324_social_sharing', 30);

// Remove Twitter feed
remove_action('wp_enqueue_scripts', 'baindesign324_enqueue_vendor_js_twitter_feed', 20);
remove_action('wp_enqueue_scripts', 'baindesign324_enqueue_custom_js_twitter_feed', 25);

// Page
remove_action('baindesign324_pre_content', 'baindesign324_cover', 20);
remove_action('baindesign324_primary_before', 'bd324_show_article_header', 20);
remove_action('baindesign324_primary_before', 'baindesign324_content_secondary', 40);

// Header
remove_action('baindesign324_header_bottom', 'baindesign324_header_bottom_wrapper_open', 10);
remove_action('baindesign324_header_bottom', 'baindesign324_header_bottom_wrapper_close', 100);
remove_action('baindesign324_primary_before', 'baindesign324_page_intro_wrapper_open', 10);
remove_action('baindesign324_primary_before', 'baindesign324_generic_wrapper_close', 30);

// Footer
// remove_action('baindesign324_colophon', 'baindesign324_social_links', 20);

/**
 * ===========
 * Woocommerce
 * ===========
 */

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10); // Remove price
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40); // Remove meta
remove_action('woocommerce_before_single_product_summary', 'woocommerce_template_single_meta', 5); // Remove more meta

// Move Related Products 
// =====================
// Move Related to its own section below single products
// This should probably be a Base Theme default (TO DO)

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// Remove product excerpt from single product
// ==========================================

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

// Move all notices
// ================
/*
remove_action( 'woocommerce_cart_is_empty', 'woocommerce_output_all_notices', 5 );
remove_action( 'woocommerce_shortcode_before_product_cat_loop', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_before_single_product', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_before_cart', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_before_checkout_form_cart_notices', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_account_content', 'woocommerce_output_all_notices', 5 );
remove_action( 'woocommerce_before_customer_login_form', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_before_lost_password_form', 'woocommerce_output_all_notices', 10 );
remove_action( 'before_woocommerce_pay', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_before_reset_password_form', 'woocommerce_output_all_notices', 10 );

add_action( 'bd324_woo_notices_section', 'woocommerce_output_all_notices', 5 );
add_action( 'bd324_woo_notices_section', 'woocommerce_output_all_notices', 10 );
add_action( 'bd324_woo_notices_section', 'woocommerce_output_all_notices', 10 );
add_action( 'bd324_woo_notices_section', 'woocommerce_output_all_notices', 10 );
add_action( 'bd324_woo_notices_section', 'woocommerce_output_all_notices', 10 );
add_action( 'bd324_woo_notices_section', 'woocommerce_output_all_notices', 10 );
add_action( 'bd324_woo_notices_section', 'woocommerce_output_all_notices', 10 );
add_action( 'bd324_woo_notices_section', 'woocommerce_output_all_notices', 5 );
add_action( 'bd324_woo_notices_section', 'woocommerce_output_all_notices', 10 );
add_action( 'bd324_woo_notices_section', 'woocommerce_output_all_notices', 10 );
add_action( 'bd324_woo_notices_section', 'woocommerce_output_all_notices', 10 );
add_action( 'bd324_woo_notices_section', 'woocommerce_output_all_notices', 10 );
*/