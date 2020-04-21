<?php

require get_template_directory() . '/framework/inc/template-tags/cpt-archive-link.php';
require get_template_directory() . '/framework/inc/template-tags/language-switcher.php';
require get_template_directory() . '/framework/inc/template-tags/search-form.php';
require get_template_directory() . '/framework/inc/template-tags/show-all-terms.php';
require get_template_directory() . '/framework/inc/template-tags/social-sharing.php';

/**
 * Show the Primary Call To Action
 */
if ( !function_exists( 'bd324_main_cta' )) :
   function bd324_main_cta()
   {
      // Check if there's a CTA to show
      $cta = bd324_get_primary_cta();
      
      if ( $cta ) {
         $classes = array(
            'cta', 
            'cta--main'
         );
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo $cta;
         baindesign324_generic_wrapper(NULL, NULL, 'close');
      }

   }
endif;

/** 
 * Get the Primary CTA from Theme Options
 */
if ( !function_exists( 'bd324_get_primary_cta' )) :
   function bd324_get_primary_cta()
   {
      $cta = get_field( 'primary_cta', 'option' );
      $link = $cta['primary_cta_url'];
      $text = $cta['primary_cta_text'];

      if( !$link || !$text) {
         return;
      }

      $content = '<a href="'.$link.'">'.$text.'</a>';
      return $content;
   }
endif;