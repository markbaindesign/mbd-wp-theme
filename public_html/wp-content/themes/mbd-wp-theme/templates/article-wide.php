<?php

/**
 * Template Name: Wide Article
 * Template Post Type: post, page
 *
 */
get_header();
$classes = array( 
   'article', 
   'article--wide');
baindesign324_generic_wrapper(NULL, $classes, NULL);
while ( have_posts() ) : the_post();
   bd324_show_article_aside(); // Image
   bd324_show_article_header();
   echo '<section class="post__body">';
   baindesign324_content();
   echo '</section>';
endwhile;
baindesign324_generic_wrapper(NULL,NULL,'close');
get_footer();