<?php
/**
 * baindesign324_enqueue_styles
 */
if ( ! function_exists( 'baindesign324_enqueue_styles' ) ) :
    function baindesign324_enqueue_styles() {
        if ( !is_admin() ) { 
            wp_enqueue_style( 'baindesign324-style', get_stylesheet_directory_uri() . '/style.css', array(), null );        
        }
    }
endif;