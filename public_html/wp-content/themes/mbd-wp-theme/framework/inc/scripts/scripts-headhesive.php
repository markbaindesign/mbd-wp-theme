<?php

/**
 * Headhesive
 */

if (!function_exists('baindesign324_enqueue_js_headhesive')) :
	function baindesign324_enqueue_js_headhesive()
	{
		if (!is_admin()) {
			wp_enqueue_script('baindesign324_enqueue_js_headhesive', get_template_directory_uri() . '/framework/assets/js/source/vendor/headhesive.min.js', array(), null, TRUE);
		}
	}
endif;

/**
 * Headhesive config
 */

if (!function_exists('baindesign324_enqueue_js_headhesive_config')) :
	function baindesign324_enqueue_js_headhesive_config()
	{
		if (!is_admin()) {
			wp_enqueue_script('baindesign324_enqueue_js_headhesive_config', get_template_directory_uri() . '/framework/assets/js/source/custom/headhesive-config.js', array(), null, TRUE);
		}
	}
endif;
