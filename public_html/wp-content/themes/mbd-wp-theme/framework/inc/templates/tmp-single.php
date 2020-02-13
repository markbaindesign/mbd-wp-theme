<?php

/**
 * 
 */

if ( ! function_exists( 'baindesign324_template_single_main' ) ) :
	function baindesign324_template_single_main() {
      $post_type = get_post_type();
      $id = get_the_ID();
      if ($post_type == 'teammembers') {
         baindesign324_generic_wrapper( 
            $id,     // Post ID
            'post person',	// Post classes
            '' 		// Close?
         );
         echo '<section class="post__image">';
         bd324_cpt_person_image($id);
         echo '</section>';

         echo '<section class="post__title"><h1>';
         bd324_cpt_person_name($id);
         echo '</h1>';
         bd324_cpt_person_meta($id);
         bd324_page_external_links($id);
         echo '</section>';
         
         echo '<section class="post__content">';
         bd324_cpt_person_text($id);
         echo '</section>';

         baindesign324_generic_wrapper( 
            $id,  // Post ID
            'post',	// Post classes
            'close'		// Close?
         );
      } else {
         echo '<section class="post__content">';
         echo get_the_content();
         echo '</section>';
      }
      
   }
endif;
