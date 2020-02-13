<?php

// Core hooks
add_action( 'wp_head', 'baindesign324_child_google_tag_manager_head', 10 );  
add_action( 'wp_head', 'baindesign324_child_typekit_inline', 20 );
add_action( 'wp_head', 'baindesign324_child_remove_action', 20 );
add_filter( 'body_class', 'baindesign324_child_body_classes' );
add_action( 'wp_head', 'baindesign324_child_remove_action' );
add_action( 'wp_enqueue_scripts', 'baindesign324_child_enqueue_styles', 10 );
add_action( 'wp_enqueue_scripts', 'baindesign324_child_enqueue_scripts', 10 );

// Custom theme hooks i.e. prefixed with "baindesign324_"
add_action( 'baindesign324_after_opening_body_tag', 'baindesign324_child_google_tag_manager_body', 5 );
