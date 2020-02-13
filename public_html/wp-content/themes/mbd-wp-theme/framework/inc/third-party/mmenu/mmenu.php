<?php

/**
 * Enqueue scripts
 */
function baindesign324_scripts_mmenu() {
	wp_enqueue_style( 'baindesign324-mmenu-style', get_template_directory_uri() . '/framework/assets/css/vendor/mmenu/jquery.mmenu.css' );
	wp_enqueue_style( 'baindesign324-mmenu-dim-style', get_template_directory_uri() . '/framework/assets/css/vendor/mmenu/jquery.mmenu.pagedim.css' );
	wp_enqueue_style( 'baindesign324-mmenu-position-style', get_template_directory_uri() . '/framework/assets/css/vendor/mmenu/jquery.mmenu.positioning.css' );
}