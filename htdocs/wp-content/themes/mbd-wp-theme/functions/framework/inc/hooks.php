<?php

/**
 * Use with custom theme hooks
 * Functions should be added to core WordPress hooks
 * in /init/add_action.php
 */

add_action( 'baindesign324_head', 'baindesign324_head_content', 10 );
add_action( 'baindesign324_head', 'baindesign324_typekit', 10 );
add_action( 'baindesign324_head', 'baindesign324_site_favicons', 99 );
// ---
add_action( 'baindesign324_body_top', 'baindesign324_sitewrapper_open', 10 ); // Required for Mmenu!
// ---
add_action( 'baindesign324_pre_header', 'baindesign324_pre_header_wrapper_open', 10 );
add_action( 'baindesign324_pre_header', 'baindesign324_menu_account', 50 );
add_action( 'baindesign324_pre_header', 'baindesign324_social_links', 60 );
add_action( 'baindesign324_pre_header', 'baindesign324_pre_header_wrapper_close', 100 );
// ---
add_action( 'baindesign324_header_top', 'baindesign324_mmenu_mhead', 5 );
add_action( 'baindesign324_header_top', 'baindesign324_header_top_wrapper_open', 10 );
add_action( 'baindesign324_header_top', 'baindesign324_site_branding_title', 20 );
add_action( 'baindesign324_header_top', 'baindesign324_menu_standard', 30 );
add_action( 'baindesign324_header_top', 'baindesign324_mmenu_toggle', 40 );
// add_action( 'baindesign324_header_top', 'baindesign324_menu_responsive', 30 );
add_action( 'baindesign324_header_top', 'baindesign324_mmenu_toggle_static', 40 );
add_action( 'baindesign324_header_top', 'baindesign324_toggle_search', 60 );
add_action( 'baindesign324_header_top', 'baindesign324_search_bar', 70 );
add_action( 'baindesign324_header_top', 'baindesign324_header_top_wrapper_close', 100 );
// ---
add_action( 'baindesign324_header_bottom', 'baindesign324_header_bottom_wrapper_open', 10 );
add_action( 'baindesign324_header_bottom', 'baindesign324_cover', 20 );
add_action( 'baindesign324_header_bottom', 'baindesign324_header_bottom_wrapper_close', 100 );
// ---
add_action( 'baindesign324_post_header', 'baindesign324_cover', 20  );
add_action( 'baindesign324_pre_content', 'baindesign324_cover', 20 );
// ---
// add_action( 'baindesign324_content_top', '' );

add_action( 'baindesign324_pre_colophon', 'baindesign324_pre_colophon_mailchimp_form', 20 );

add_action( 'baindesign324_pre_colophon', 'baindesign324_footer_sidebar', 30 );
// ---
add_action( 'baindesign324_colophon', 'baindesign324_footer_menu', 10 );
add_action( 'baindesign324_colophon', 'baindesign324_social_links', 20 );
add_action( 'baindesign324_colophon', 'baindesign324_site_info_design_credit', 30 );
add_action( 'baindesign324_colophon', 'baindesign324_site_info_copyright', 40 );
add_action( 'baindesign324_colophon', 'baindesign324_footer_logo', 50 );

// ---
add_action( 'baindesign324_body_bottom', 'baindesign324_sitewrapper_close', 10 ); // Required for Mmenu!
// ---
add_action( 'baindesign324_post_body', 'baindesign324_offcanvas_nav', 10 );
// add_action( 'baindesign324_post_body', 'baindesign324_searchform_fullscreen', 20 );	
// add_action( 'baindesign324_main_before', 'baindesign324_main_before', 10 );
// ---
add_action( 'baindesign324_primary_before', 'baindesign324_page_intro_wrapper_open', 10 );
add_action( 'baindesign324_primary_before', 'baindesign324_article_header', 20 );
add_action( 'baindesign324_primary_before', 'baindesign324_generic_wrapper_close', 30 );
add_action( 'baindesign324_primary_before', 'baindesign324_content_secondary', 40 );
// ---
// add_action( 'baindesign324_article_top', '', 10 );
// ---
// add_action( 'baindesign324_article_bottom', 'baindesign324_article_bottom', 5 );
add_action( 'baindesign324_pre_colophon', 'baindesign324_related_blog_posts', 10 );
// ---
add_action( 'baindesign324_pre_comments', 'baindesign324_pre_comments_wrapper_open', 10 );
add_action( 'baindesign324_pre_comments', 'baindesign324_post_tags', 20 );
add_action( 'baindesign324_pre_comments', 'baindesign324_social_sharing', 30 );
add_action( 'baindesign324_pre_comments', 'baindesign324_generic_wrapper_close', 40 );
add_action( 'baindesign324_pre_comments', 'baindesign324_comments', 50 );
// ---
// add_action( 'baindesign324_main_after', 'baindesign324_post_nav', 10 );
// add_action( 'baindesign324_content_after', 'baindesign324_post_tags', 10 );
// ---
add_action( 'baindesign324_front_page', 'baindesign324_homepage_flex_content', 20 );
// add_action( 'baindesign324_front_page', 'baindesign324_latest_blog_posts', 20 );
add_action( 'baindesign324_front_page', 'baindesign324_template_next_event', 30 );
// add_action( 'baindesign324_front_page', 'baindesign324_featured_cpt_book', 40 );
// add_action( 'baindesign324_blog_archive', 'baindesign324_page_intro_wrapper_open', 10 );
// add_action( 'baindesign324_blog_archive', 'baindesign324_blog_intro', 20 );
// add_action( 'baindesign324_blog_archive', 'baindesign324_generic_wrapper_close', 30 );
// add_action( 'baindesign324_blog_archive', 'baindesign324_featured_post_wrapper_open', 40 );
// add_action( 'baindesign324_blog_archive', 'baindesign324_featured_post', 50 );
// add_action( 'baindesign324_blog_archive', 'baindesign324_generic_wrapper_close', 60 );
// add_action( 'baindesign324_blog_archive', 'baindesign324_post_layout_wrapper_open', 70 );
// add_action( 'baindesign324_blog_archive', 'baindesign324_offset_query', 80 );
// add_action( 'baindesign324_blog_archive', 'baindesign324_post_grid', 90 );
// add_action( 'baindesign324_blog_archive', 'baindesign324_generic_wrapper_close', 100 );
// add_action( 'baindesign324_cover_top', 'baindesign324_event_date', 10 );
// add_action( 'baindesign324_cover_bottom', 'baindesign324_social_links', 10 );