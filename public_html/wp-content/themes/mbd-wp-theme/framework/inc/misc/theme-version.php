<?php

/**
 * Theme version
 */

if (!function_exists('baindesign324_theme_version')) :
   function baindesign324_theme_version()
   { 
      // Value updated via Grunt task when 
      // theme version changes. 
      // Used to get version in stylesheet enqueue function
      // for cache-busting.
      $version="1.3.1";
      return $version;
    }
endif;
