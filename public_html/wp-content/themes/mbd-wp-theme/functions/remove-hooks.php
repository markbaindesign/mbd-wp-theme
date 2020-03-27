<?php

/**
 * Remove any hooked functions from the theme.
 * 
 * Multiple versions of some elements are loaded by default, 
 * so you should select the one you want by removing the 
 * others here. 
 * 
 * Example: No mailing list?
 * 
 * remove_action( 'baindesign324_pre_colophon', 'baindesign324_mailchimp_form', 20 );
 * 
 */

remove_action('wp_enqueue_scripts',             'bd324_enqueue_fp_styles',                      999); // Prototype styles
remove_action('baindesign324_primary_before',   'bd324_show_article_header',                    20 ); // Article header
remove_action('baindesign324_pre_content',      'baindesign324_cover',                          20 ); // Legacy cover