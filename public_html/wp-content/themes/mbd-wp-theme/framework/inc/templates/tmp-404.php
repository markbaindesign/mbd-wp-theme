<?php

/**
 * 404 page template
 */

if (!function_exists('bd324_template_notfound')) :
   function bd324_template_notfound()
   {
      $id = get_the_ID();
      baindesign324_generic_wrapper(
         $id,     // Post ID
         'post person',   // Post classes
         ''       // Close?
      );

      echo '<section class="post__title"><h1>';
      _e( 'Not found', '_baindesign');
      bd324_cpt_person_meta($id);
      bd324_page_external_links($id);
      echo '</h1></section>';

      echo '<section class="post__content">';
      _e( 'Perhaps searching will help?', '_baindesign');
      echo '</section>';

      baindesign324_generic_wrapper(
         $id,  // Post ID
         'post',   // Post classes
         'close'      // Close?
      );
   }
endif;
