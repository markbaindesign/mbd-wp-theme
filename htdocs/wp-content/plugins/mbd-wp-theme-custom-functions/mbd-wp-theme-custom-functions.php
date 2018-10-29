<?php

/*
 Plugin Name: Bain Design Theme Custom Functions
 Description: Adds custom functionality to Bain Design WordPress themes
 Author: Bain Design
 Version: 1.0.0
 Author URI: http://bain.design
 License: GNU General Public License v2.0
 License URI: http://www.gnu.org/licenses/gpl-2.0.html
 Text Domain: _bain_design_plugin
 Domain Path: /languages/
 */

/*
 *  Text domain
 */
function baindesign_load_textdomain() {
 load_plugin_textdomain( '_bain_design_plugin', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}
add_action( 'init', 'baindesign_load_textdomain' );

/*
 *  Shortcodes
 */
include_once('inc/shortcodes/shortcodes.php');

/*
 *  Custom Post Types
 */
include_once('inc/cpt/custom-post-types.php');

/*
 *  Taxonomy Meta Class
 */
include_once('inc/tax-meta-class/tax-meta-class.php');

/*
 *  Misc
 */
// include_once('inc/misc/misc.php'); 