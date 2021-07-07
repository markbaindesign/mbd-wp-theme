<?php

/**
 * Project CPT
 */

namespace PostTypes;

use PostTypes\PostType;

if (!function_exists('baindesign324_register_cpt_project')) :
	function baindesign324_register_cpt_project()
	{
		$names = [
			'name' => 'project',
			'singular' => __('Project'),
			'plural' => __('Projects'),
			'slug' => __('projects'),
		];
		$options = [
			'supports' 	=> array('title', 'editor', 'excerpt', 'thumbnail'),
			'has_archive' => true,
			'hierarchical' => false,
			'capability_type' => 'page',
			'show_in_menu' => true,
		];
		$content = new PostType($names, $options);
		$content->icon("dashicons-clipboard");
		$content->columns()->hide(['date']);
		$content->register();
	}
endif;
