<?php

/**
 * Theme hooks
 */

// add_action( 'baindesign_head', '' );
// add_action( 'baindesign_after_opening_body_tag', '' );
// add_action( 'baindesign_body_top', '' );


add_action( 'baindesign_pre_header', 'baindesign324_show_login', 20 );
add_action( 'baindesign_pre_header', 'baindesign324_show_social', 10 );

// add_action( 'baindesign_post_header', '' );
// add_action( 'baindesign_pre_content', '' );
// add_action( 'baindesign_content_top', '' );

add_action( 'baindesign_pre_colophon', 'baindesign324_show_gallery', 10 );
add_action( 'baindesign_pre_colophon', 'baindesign324_footer_nav', 20 );

add_action( 'baindesign_colophon', 'baindesign324_show_social', 10 );
add_action( 'baindesign_colophon', 'baindesign324_footer_logo', 20 );
add_action( 'baindesign_colophon', 'baindesign324_site_info', 30 );

// add_action( 'baindesign_post_colophon', '' );
// add_action( 'baindesign_body_bottom', '' );
// add_action( 'baindesign_post_body', '' );

add_action( 'baindesign_front_page', 'baindesign324_site_hero', 5 );
add_action( 'baindesign_front_page', 'baindesign324_site_intro', 10 );
add_action( 'baindesign_front_page', 'baindesign324_mailchimp_form', 20 );
add_action( 'baindesign_front_page', 'baindesign324_latest_blog_posts', 30 );
add_action( 'baindesign_front_page', 'baindesign324_testimonials', 40 );
add_action( 'baindesign_front_page', 'baindesign324_twitter_feed', 50 );

add_action( 'baindesign_blog_archive', '', 10 );
add_action( 'baindesign_blog_archive', '', 20 );
add_action( 'baindesign_blog_archive', '', 30 );

add_action( 'baindesign_single_main_after', 'baindesign324_post_nav', 10 );
add_action( 'baindesign_single_main_after', 'baindesign324_latest_blog_posts', 20 );