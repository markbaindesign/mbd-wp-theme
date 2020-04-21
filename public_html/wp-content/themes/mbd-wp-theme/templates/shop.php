<?php

/**
 * Template Name: Shop
 * Template Post Type: post, page
 *
 */
get_header();
$classes = array( 
   'posts-grid', 
   'articles', 
   'products');
baindesign324_generic_wrapper(NULL, $classes, NULL);
bd324_show_article_header();
echo '<div class="posts__wrapper">';
echo do_shortcode("[products columns='1']");
echo '</div>';
baindesign324_generic_wrapper(NULL,NULL,'close');
get_footer();