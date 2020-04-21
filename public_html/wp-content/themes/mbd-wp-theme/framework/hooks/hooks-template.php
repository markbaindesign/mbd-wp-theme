<?php

/** 
 * Body
 */
add_action('baindesign324_body_bottom', 'baindesign324_sitewrapper_close', 10);
add_action('baindesign324_body_top', 'baindesign324_sitewrapper_open', 10);
add_action('baindesign324_post_body', 'baindesign324_offcanvas_nav', 10);

/**
 * Head
 */
add_action('baindesign324_head', 'baindesign324_head_content', 10);
add_action('baindesign324_head', 'baindesign324_site_favicons', 99);


/** 
 * Header
 */
add_action('baindesign324_header_bottom', 'baindesign324_header_bottom_wrapper_close', 100);
add_action('baindesign324_header_bottom', 'baindesign324_header_bottom_wrapper_open', 10);
add_action('baindesign324_header_top', 'baindesign324_header_top_wrapper_close', 100);
add_action('baindesign324_header_top', 'baindesign324_header_top_wrapper_open', 10);
add_action('baindesign324_header_top', 'baindesign324_menu_standard', 30);
add_action('baindesign324_header_top', 'baindesign324_mmenu_mhead', 5);
add_action('baindesign324_header_top', 'baindesign324_site_branding_title', 20);

// Menu toggles
add_action('baindesign324_header_top', 'baindesign324_mmenu_toggle_animated', 40);
add_action('baindesign324_header_top', 'baindesign324_mmenu_toggle', 40);
add_action('baindesign324_header_top', 'baindesign324_mmenu_toggle_static', 40);

// Search
add_action('baindesign324_header_top', 'baindesign324_search_bar', 70);
add_action('baindesign324_header_top', 'baindesign324_toggle_search', 60);

/**
 * Pre-colophon
 */
add_action('baindesign324_pre_colophon', 'bd324_pagination_section',                      10);
add_action('baindesign324_pre_colophon', 'bd324_main_cta',                                20);
add_action('baindesign324_pre_colophon', 'baindesign324_related_blog_posts',              30);
add_action('baindesign324_pre_colophon', 'bd324_mailchimp_form_section',                   40);
add_action('baindesign324_pre_colophon', 'baindesign324_footer_sidebars',                 50);
add_action('baindesign324_pre_colophon', 'baindesign324_footer_sidebar',                  60);

/**
 * Colophon
 */
add_action('baindesign324_colophon', 'baindesign324_footer_logo', 50);
add_action('baindesign324_colophon', 'baindesign324_footer_menu', 10);
add_action('baindesign324_colophon', 'baindesign324_site_info_copyright', 40);
add_action('baindesign324_colophon', 'baindesign324_site_info_design_credit', 30);
add_action('baindesign324_colophon', 'baindesign324_social_links', 20);
add_action('baindesign324_colophon', 'baindesign324_back_to_top', 60);

/** 
 * Front Page
 */
add_action('baindesign324_front_page', 'baindesign324_homepage_flex_content', 20);
add_action('baindesign324_front_page', 'baindesign324_template_next_event', 30);

/** 
 * Blog Archive Page 
 * (home.php)
 */
// add_action( 'baindesign324_blog_archive_page', 'baindesign324_featured_post',                      10 );
add_action('baindesign324_blog_archive_page', 'bd324_loop_latest_post',                               10);
// add_action( 'baindesign324_blog_archive_page', 'baindesign324_blog_posts_list_standard',           20 );
// add_action( 'baindesign324_blog_archive_page', 'baindesign324_blog_posts_list_not_featured',       20 );
// add_action( 'baindesign324_blog_archive_page', 'baindesign324_blog_posts_list_not_latest',         20 );
// add_action( 'baindesign324_blog_archive_page', 'baindesign324_blog_archive_pagination',            30 );

/**
 * Search results page
 */
add_action('bd324_search', 'bd324_search_wrapper_open', 5);
add_action('bd324_search', 'bd324_search_header', 10);
add_action('bd324_search', 'bd324_search_results', 20);
add_action('bd324_search', 'bd324_search_wrapper_close', 25);

/**
 * After Content
 */
add_action('baindesign324_content_after', 'baindesign324_post_tags_section', 10);

/**
 * Pre-comments
 */
// add_action( 'baindesign324_primary_after',      'baindesign324_social_sharing',              30 );
add_action('baindesign324_primary_after',      'baindesign324_comments',                    50);

/**
 * Pre-content
 */
add_action('baindesign324_pre_content', 'baindesign324_widget_area_pre_content', 10);
add_action('baindesign324_pre_content', 'baindesign324_cover', 20);

/** 
 * Preheader
 */
add_action('baindesign324_pre_header', 'baindesign324_menu_account', 50);
add_action('baindesign324_pre_header', 'baindesign324_pre_header_wrapper_close', 100);
add_action('baindesign324_pre_header', 'baindesign324_pre_header_wrapper_open', 10);
add_action('baindesign324_pre_header', 'baindesign324_social_links', 60);

/**
 * Primary
 */
add_action('baindesign324_primary_before', 'bd324_show_article_header', 20);
add_action('baindesign324_primary_before', 'baindesign324_content_secondary', 40);
add_action('baindesign324_primary_before', 'baindesign324_generic_wrapper_close', 30);
add_action('baindesign324_primary_before', 'baindesign324_page_intro_wrapper_open', 10);

// Templates
// Assign content to templates
add_action('bd324_template_archive', 'baindesign324_template_archive_main', 20);
add_action('baindesign324_template_single', 'baindesign324_template_single_main', 20);
add_action('bd324_notfound', 'bd324_template_notfound', 20);
