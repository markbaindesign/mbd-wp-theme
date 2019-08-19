<?php

/**
 * Plug into existing functions or roll your own!
 */


require get_stylesheet_directory() . '/functions/custom/inc/styles/styles.php';
require get_stylesheet_directory() . '/functions/custom/inc/scripts/scripts.php';
require get_stylesheet_directory() . '/functions/custom/inc/webfonts/fonts_typekit.php';
require get_stylesheet_directory() . '/functions/custom/inc/webfonts/fonts_google.php';
require get_stylesheet_directory() . '/functions/custom/inc/hooks_custom.php';
/*
 *  Add custom class to body
 */
function baindesign324_child_body_classes( $classes ) {
  
    global $post;

    $classes[] = 'baindesign324_child_body-class';
    $classes[] = 'with-sidebar';
    $classes[] = 'right-sidebar';

    return $classes;
}

/**
 * Unhook parent theme hooks
 */

function baindesign324_child_remove_action(){
    // remove_action( 'baindesign324_header_top', 'baindesign324_mmenu_mhead', 5 );
}