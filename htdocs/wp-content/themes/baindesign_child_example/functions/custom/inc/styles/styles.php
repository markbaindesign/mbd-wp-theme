<?php
function baindesign324_enqueue_styles() {
    if ( !is_admin() ) { 
        wp_enqueue_style( 'baindesign324-style', get_template_directory_uri() . '/style.css', array(), null );
        wp_enqueue_style( 'baindesign324-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'baindesign324-style' ), null );
    }
}