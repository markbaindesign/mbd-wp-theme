<?php

/**
 * Search page top wrapper
 */
if (!function_exists('bd324_search_wrapper_open')) :
   function bd324_search_wrapper_open()
   {
      baindesign324_generic_wrapper();
   }
endif;

/**
 * Search page header
 */
if (!function_exists('bd324_search_header')) :
   function bd324_search_header()
   {
      bd324_show_article_header();
   }
endif;

/**
 * Search page results
 */
if (!function_exists('bd324_search_results')) :
   function bd324_search_results()
   {
      if ( have_posts() ) : 
         echo '<div class="post__wrapper">';
         while ( have_posts() ) : the_post();
            $id = get_the_ID(); 
            bd324_search_results_content($id);
         endwhile;
         echo '</div>'; 
      else :
         _e( 'Sorry, no results found.', '_bd324theme' );
      endif;
   }
endif;

/**
 * Search page bottom wrapper
 */
if (!function_exists('bd324_search_wrapper_close')) :
   function bd324_search_wrapper_close()
   {
      baindesign324_generic_wrapper(NULL,NULL,'close');
   }
endif;