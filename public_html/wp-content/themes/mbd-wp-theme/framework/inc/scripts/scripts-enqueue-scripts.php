<?php
if (!function_exists('baindesign324_enqueue_scripts')) :
   function baindesign324_enqueue_scripts()
   {

      if (!is_admin()) {

         // WP Core
         wp_enqueue_script('jquery');

         // Vendor

         wp_enqueue_script('baindesign324_lity', get_template_directory_uri() . '/framework/assets/js/source/vendor/lity.min.js', array(), null, TRUE);
         wp_enqueue_script('baindesign324_aos', '//cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', array(), null, false);
         wp_enqueue_script('baindesign324_slick', get_template_directory_uri() . '/framework/assets/js/source/vendor/slick.min.js', array('jquery'), null, TRUE);

         // Custom
         wp_enqueue_script('baindesign324_main', get_template_directory_uri() . '/framework/assets/js/source/custom/main.js', array(), null, TRUE);

         // Localize Twitter feed
         $baindesign324_enqueue_vendor_js_twitter_feed_id = get_theme_mod('baindesign324_enqueue_vendor_js_twitter_feed_id');
         $twitter_feed_id = array(
            'twitter_id' => $baindesign324_enqueue_vendor_js_twitter_feed_id,
         );
         wp_localize_script('baindesign324_tweetFetcher', 'twitter_handle', $twitter_feed_id);

         // Localize assets directory for use in main.js
         $assets_dir = array('stylesheet_directory_uri' => get_template_directory_uri());
         wp_localize_script('baindesign324_main', 'directory_uri', $assets_dir);
      }
   }
endif;

if (!function_exists('bd324_enqueue_script_toggle')) :
   function bd324_enqueue_script_toggle()
   {
      if (!is_admin()) {
         wp_enqueue_script('jquery');
         // Vendor
         wp_enqueue_script('bd324_fw_toggle', get_template_directory_uri() . '/framework/assets/js/source/vendor/responsive-nav.js', array('jquery'), null, TRUE);
         // Config
         wp_enqueue_script('bd324_fw_toggle_config', get_template_directory_uri() . '/framework/assets/js/source/custom/fw-config-toggle.js', array(), null, TRUE);
      }
   }
endif;

/**
 * Enqueue back to top scrolling
 */
if (!function_exists('bd324_enqueue_script_back_to_top')) :
   function bd324_enqueue_script_back_to_top()
   {
      if (!is_admin()) {
         wp_enqueue_script('jquery');
         wp_enqueue_script('bd324_fw_back_to_top', get_template_directory_uri() . '/framework/assets/js/source/custom/scrolling-custom.js', array('jquery'), null, TRUE);
      }
   }
endif;

/**
 * Enqueue baguetterBox.js Gallery Lightbox
 */
if (!function_exists('bd324_enqueue_script_baguettebox')) :
   function bd324_enqueue_script_baguettebox()
   {
      if (!is_admin()) {
         wp_enqueue_script('bd324_fw_baguettebox', get_template_directory_uri() . '/framework/assets/js/source/vendor/baguetteBox.min.js', array(), null, TRUE);
      }

   }
endif;

/**
 * Enqueue baguetterBox.js Gallery Lightbox
 */
if (!function_exists('bd324_enqueue_script_baguettebox_config')) :
   function bd324_enqueue_script_baguettebox_config()
   {
      if (!is_admin()) {
         wp_enqueue_script('bd324_fw_baguettebox_config', get_template_directory_uri() . '/framework/assets/js/source/custom/baguetteBox.config.js', array('bd324_fw_baguettebox'), null, TRUE);
      }

   }
endif;

