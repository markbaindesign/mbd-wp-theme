<?php

/**
 * Load the custom theme if it exists.
 * 
 * By loading this first, this allow us to 
 * override framework functions.
 * 
 */
include get_template_directory() . '/custom/custom.php';

/**
 * Load the theme framework.
 * 
 */
require get_template_directory() . '/framework/framework.php';

/**
 * Remove framework hooks as required.
 * 
 */
include get_template_directory() . '/custom/remove-hooks.php';
