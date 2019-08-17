<?php

// Core hooks
add_action( 'wp_head', 'foobot324_google_tags', 10 );  
add_action( 'wp_head', 'baindesign324_child_typekit_inline', 20 );
add_action( 'wp_head', 'baindesign324_child_remove_action' );
add_filter( 'body_class', 'baindesign324_child_body_classes' );
add_action( 'wp_enqueue_scripts', 'baindesign324_child_enqueue_styles', 10 );
add_action( 'wp_enqueue_scripts', 'baindesign324_child_enqueue_scripts', 10 );

// Custom theme hooks i.e. prefixed with "baindesign324_"
add_action( 'baindesign324_after_opening_body_tag', 'foobot324_google_tags_body', 5 );
add_action( 'baindesign324_main_after', 'foobot324_comments', 20 );
add_action( 'baindesign324_content_before', 'foobot324_article_header', 20 );
add_action( 'baindesign324_colophon', 'baindesign324_footer_menu', 15 );
// ---
add_action( 'baindesign324_header_bottom', 'baindesign324_search_bar', 20 );
