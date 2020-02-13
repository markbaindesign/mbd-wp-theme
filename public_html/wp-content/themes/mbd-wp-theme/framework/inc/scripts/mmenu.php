<?php

// mmenu
if (!function_exists('baindesign324_enqueue_mmenu')) :
   function baindesign324_enqueue_mmenu()
   {
      if (!is_admin()) {

         // Script
         wp_enqueue_script('baindesign324_mmenu', get_template_directory_uri() . '/framework/assets/js/source/vendor/mmenu.js', array(), null, TRUE);

         // Styles
         wp_enqueue_style( 'baindesign324_mmenu',  get_template_directory_uri() . '/framework/assets/css/vendor/mmenu.css', array(), null );

      }
   }
endif;

// mmenu config
if (!function_exists('baindesign324_enqueue_mmenu_config')) :
   function baindesign324_enqueue_mmenu_config()
   {
      if (!is_admin()) {
         wp_enqueue_script('baindesign324_mmenu_config', get_template_directory_uri() . '/framework/assets/js/source/custom/mmenu-config.js', array(), null, TRUE);
      }
   }
endif;

// mmenu animated hamburger "mburger"
if (!function_exists('baindesign324_enqueue_mmenu_hamburger')) :
   function baindesign324_enqueue_mmenu_hamburger()
   {
      if (!is_admin()) {

         // Script
         wp_enqueue_script('baindesign324_mmenu_hamburger', get_template_directory_uri() . '/framework/assets/js/source/vendor/mburger.js', array(), null, TRUE);

         // Styles
         wp_enqueue_style( 'baindesign324_mmenu_hamburger_styles',  get_template_directory_uri() . '/framework/assets/css/vendor/mburger.css', array(), null );

      }
   }
endif;
