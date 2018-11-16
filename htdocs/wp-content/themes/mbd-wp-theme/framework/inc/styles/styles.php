<?php
/**
 * baindesign324_enqueue_styles
 */
if ( ! function_exists( 'baindesign324_enqueue_styles' ) ) :
    function baindesign324_enqueue_styles() {
        if ( !is_admin() ) { 
            wp_enqueue_style( 'baindesign324-style', get_template_directory_uri() . '/style.css', array(), null );        
        }
    }
endif;

if ( ! function_exists( 'baindesign324_enqueue_mmenu_styles' ) ) :
	function baindesign324_enqueue_mmenu_styles() {
	    if ( !is_admin() ) { 
	        wp_enqueue_style( 'mmenu',  get_template_directory_uri() . '/framework/assets/css/vendor/mmenu/jquery.mmenu.all.css', array(), null );
	        wp_enqueue_style( 'mmenu-off',  get_template_directory_uri() . '/framework/assets/css/vendor/mmenu/jquery.mmenu.offcanvas.css', array(), null );
	        wp_enqueue_style( 'mmenu-mhead',  get_template_directory_uri() . '/framework/assets/css/vendor/mmenu/jquery.mhead.css', array(), null );	        
	    }
	}
endif;

if ( ! function_exists( 'baindesign324_enqueue_animation_styles' ) ) :
	function baindesign324_enqueue_animation_styles() {
	    if ( !is_admin() ) {
	        wp_enqueue_style( 'aos-styles', get_template_directory_uri() . '/framework/assets/css/vendor/aos.css', array(), null );
	        wp_enqueue_style( 'hamburgers', get_template_directory_uri() . '/framework/assets/css/vendor/hamburgers.css', array(), null );
	        wp_enqueue_style( 'lity',  get_template_directory_uri() . '/framework/assets/css/vendor/lity.min.css', array(), null );	        
	    }
	}
endif;