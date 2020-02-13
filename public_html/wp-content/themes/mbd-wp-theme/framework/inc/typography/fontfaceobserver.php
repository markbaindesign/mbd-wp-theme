<?php

// Classes
// For use if using self-hosted web fonts
// Not required if loading fonts via Typekit

if (!function_exists('bd324_font_face_observer_classes')) :
   function bd324_font_face_observer_classes( $classes )
   {
      // Add body classes
      $classes[] = 'webfont-primary--inactive';
      return $classes;
   }
endif;

// Scripts
// For use if using self-hosted web fonts
// Not required if loading fonts via Typekit

if (!function_exists('bd324_font_face_observer_scripts')) :
   function bd324_font_face_observer_scripts()
   {
      if (!is_admin()) {
         wp_enqueue_script('fontfaceobserver', get_stylesheet_directory_uri() . '/framework/assets/js/source/vendor/fontfaceobserver.js', array(), null, TRUE);

         wp_enqueue_script('fontfaceobserver-config', get_stylesheet_directory_uri() . '/framework/assets/js/source/custom/font-face-observer-config.js', array(), null, TRUE);
      }
   }
endif;
