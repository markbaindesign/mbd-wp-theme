<?php // Cache bustin'

/**
 * Enqueue versioned styles
 */
if (!function_exists('bd324_enqueue_versioned_styles')) :
   function bd324_enqueue_versioned_styles()
   {
      if (!is_admin()) {

         // Vars
         $is_dev     = '';
         $version    = '';
         $deps       = '';
         $default_handle     = 'bd324-style';

         /**
          * Check if we are dealing with a development environment
          */
         if ( function_exists( 'wp_get_environment_type' ) ) {
            $is_dev = bd324_is_dev_env();
         }
         elseif (function_exists( 'bd324_is_dev_site' )) {
            $is_dev = bd324_is_dev_site();
         }
         /* Debug */
         // var_dump($is_dev);

         /**
          * Get version
          */
         if (function_exists( 'baindesign324_theme_version' )) {
            $version = baindesign324_theme_version();
         }
         /* Debug */
         // var_dump($version);

         // Dependencies
         // $deps = array( 'parent-style', 'smartmag-skin' );

         $versioned_style_filename = '/style.' . $version . '.css';
         $versioned_style_uri = get_stylesheet_directory_uri() . $versioned_style_filename;
         $versioned_style_path = get_theme_file_path($versioned_style_filename);
         $default_style_uri = get_stylesheet_directory_uri() . '/style.css';

         // Check if versioned file exists &
         // Check if is dev site
         // Set stylesheet URL & script handle
         if ( file_exists( $versioned_style_path ) && $is_dev == FALSE) {
            $target_style = $versioned_style_uri;
            $handle = $default_handle . '-versioned';
         } else {
            $target_style = $default_style_uri; // Dev site or no versioned CSS
            $handle = $default_handle;
         }

         /* Debug */
         // var_dump($target_style);
         // var_dump($handle);

         // Enqueue the stylesheet
         wp_enqueue_style( 
            $handle, 
            $target_style, 
            $deps, 
            null, 
            'all'
         );
      }
   }
endif;

if (!function_exists('bd324_get_dev_sites')) :
   function bd324_get_dev_sites()
   {
      // After 5.5.0 use core function
      
      // Return array of hardcoded dev sites
      // for cache-busting.
      // Any and all dev sites can be added here. 
      $sites = array(
         'https://example.test', // Placeholder
         // Replace with your own sites.
         // NO TRAILING SLASH!!
      );
      return $sites;
   }
endif;

if (!function_exists('bd324_is_dev_env')) :
   function bd324_is_dev_env()
   {
      // Uses core function to check if dev site
      // After WP 5.5.0
      if ( function_exists( 'wp_get_environment_type' ) ) {
         $env = wp_get_environment_type();
         // var_dump($env);
         switch ( $env ) {
            case 'local':
            case 'development':
               $bool =  TRUE;
               break;
              
            case 'staging':
               $bool =  TRUE;
               break;
              
            case 'production':
            default:
               $bool =  FALSE;
               break;
        }
      }
      return $bool;
   }
endif;


if (!function_exists('bd324_is_dev_site')) :
   function bd324_is_dev_site()
   {
      // Return true if site is dev site

      $url = get_site_url();
      $sites = bd324_get_dev_sites();

      /* Debug */
      // var_dump($url);
      // var_dump($sites);

      // Loop through array until match found => return TRUE
      // Else return FALSE.
      if (in_array($url, $sites)) {
         $bool =  TRUE;
      } else {
         $bool =  FALSE;
      }
      /* Debug */
      // var_dump($bool);

      return $bool;
   }
endif;

