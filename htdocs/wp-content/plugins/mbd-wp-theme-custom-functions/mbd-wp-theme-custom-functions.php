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

 function baindesign324_cookie_notice() { ?>
   <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
   <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
   <script>
     window.addEventListener("load", function(){
     window.cookieconsent.initialise({
       "palette": {
         "popup": {
           "background": "#ffffff",
           "text": "#111111"
         },
         "button": {
           "background": "#111111",
           "text": "#ffffff"
         }
       },
       "position": "bottom",
       "static": true,
         "content": {
         "dismiss": "OK"
       },

     })});
   </script>
<?php }

function baindesign324_body_classes( $classes ) {
	$classes[] = 'monochrome-theme';	
	return $classes;
}

function baindesign324_post_tags() {
	if ( ! is_single( ) ) {			
		return;
	}
	$tag_list = get_the_tag_list( '<li>','</li><li>','</li>' );
	if ( $tag_list ) {
		echo '<div class="post-taxonomies-tags"><header><span>Filed under:</span></header><ul class="post-tags">' . $tag_list . '</ul></div>';
	}
}

function baindesign324_article_header() { ?>
	<div class="post-author">Written by <?php echo get_the_author( ); ?> on <span class="post-date"><?php the_date( ); ?></span></div>
<?php }
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