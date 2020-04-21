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

if ( ! function_exists( 'baindesign324_enqueue_animation_styles' ) ) :
	function baindesign324_enqueue_animation_styles() {
	    if ( !is_admin() ) {
	        wp_enqueue_style( 'aos-styles', get_template_directory_uri() . '/framework/assets/css/vendor/aos.css', array(), null );
	        wp_enqueue_style( 'hamburgers', get_template_directory_uri() . '/framework/assets/css/vendor/hamburgers.css', array(), null );
	        wp_enqueue_style( 'lity',  get_template_directory_uri() . '/framework/assets/css/vendor/lity.min.css', array(), null );	        
	    }
	}
endif;

/**
 * Functional prototype styles
 */
if ( ! function_exists( 'bd324_enqueue_fp_styles' ) ) :
	function bd324_enqueue_fp_styles() {
	    if ( !is_admin() ) {
	        wp_enqueue_style( 'fp-styles', get_template_directory_uri() . '/framework/assets/css/custom/prototype.css', array(), null );
	    }
	}
endif;

/**
 * Responsive nav JS styles
 */
if ( ! function_exists( 'baindesign324_enqueue_js_responsive_nav' ) ) :
	function baindesign324_enqueue_js_responsive_nav() {
	    if ( !is_admin() ) {
	        wp_enqueue_style( 'responsive-nav-styles', get_template_directory_uri() . '/framework/assets/css/vendor/responsive-nav.css', array(), null );
	    }
	}
endif;

/**
 * Enqueue baguetterBox.js Gallery Lightbox styles
 */
if ( ! function_exists( 'baindesign324_enqueue_style_baguettebox' ) ) :
	function baindesign324_enqueue_style_baguettebox() {
	    if ( !is_admin() ) {
	        wp_enqueue_style( 'bd324-fw-baguettebox-styles', get_template_directory_uri() . '/framework/assets/css/vendor/baguetteBox.min.css', array(), null );
	    }
	}
endif;