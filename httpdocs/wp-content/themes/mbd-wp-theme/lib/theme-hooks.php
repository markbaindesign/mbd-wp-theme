<?php

/**
 * Theme hooks
 */

// add_action( 'baindesign_head', '' );
// add_action( 'baindesign_after_opening_body_tag', '' );
// add_action( 'baindesign_body_top', '' );


add_action( 'baindesign_pre_header', 'baindesign_show_login', 20 );
add_action( 'baindesign_pre_header', 'baindesign_show_social', 10 );

// add_action( 'baindesign_post_header', '' );
// add_action( 'baindesign_pre_content', '' );
// add_action( 'baindesign_content_top', '' );

add_action( 'baindesign_pre_colophon', 'baindesign_show_gallery', 10 );
add_action( 'baindesign_pre_colophon', 'baindesign_footer_nav', 20 );

add_action( 'baindesign_colophon', 'baindesign_show_social', 10 );
add_action( 'baindesign_colophon', 'baindesign_footer_logo', 20 );
add_action( 'baindesign_colophon', 'baindesign_site_info', 30 );

// add_action( 'baindesign_post_colophon', '' );
// add_action( 'baindesign_body_bottom', '' );
// add_action( 'baindesign_post_body', '' );

add_action( 'baindesign_front_page', 'baindesign_site_hero', 5 );
add_action( 'baindesign_front_page', 'baindesign_site_intro', 10 );
add_action( 'baindesign_front_page', 'baindesign_mailchimp_form', 20 );
add_action( 'baindesign_front_page', 'baindesign_latest_blog_posts', 30 );
add_action( 'baindesign_front_page', 'baindesign_testimonials', 40 );
add_action( 'baindesign_front_page', 'baindesign_twitter_feed', 50 );