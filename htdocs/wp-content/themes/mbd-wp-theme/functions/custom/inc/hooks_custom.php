<?php

// Core hooks
add_action( 'wp_head', 'foobot324_google_tags', 10 );  
add_action( 'wp_head', 'foobot324_theme_typekit_inline', 20 );
add_filter( 'body_class', 'custom324_body_classes' );

// Custom theme hooks i.e. prefixed with "baindesign324_"
add_action( 'baindesign324_after_opening_body_tag', 'foobot324_google_tags_body', 5 );
add_action( 'baindesign324_main_after', 'foobot324_comments', 20 );
add_action( 'baindesign324_header_top', 'custom324_mmenu_mhead', 5 );
add_action( 'baindesign324_content_before', 'foobot324_article_header', 20 );
