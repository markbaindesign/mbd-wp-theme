<?php

/**
 * Load the custom theme if it exists.
 * 
 * By loading this first, this allow us to 
 * override framework functions.
 * 
 */
include get_template_directory() . '/functions/theme.php';

/**
 * Load the theme framework.
 * 
 */
require get_template_directory() . '/framework/framework.php';

/**
 * Remove framework hooks as required.
 * 
 */
include get_template_directory() . '/functions/remove-hooks.php';

/**
 * Remove framework hooks as required.
 * 
 */
// include get_template_directory() . '/framework/templates/style-guide.php';
