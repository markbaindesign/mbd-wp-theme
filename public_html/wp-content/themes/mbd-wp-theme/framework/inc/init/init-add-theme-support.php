<?php

/**
 * Add basic theme support
 */

if (!function_exists('baindesign324_add_theme_support')) :
   function baindesign324_add_theme_support()
   {
      add_theme_support('automatic-feed-links');
      add_theme_support('html5', array(
         'search-form',
         'comment-form',
         'gallery',
         'caption',
         'comment-list'
      ));
      add_theme_support('post-thumbnails');
      add_theme_support('title-tag');
   }
endif;

/**
 * Add logo option to customizer
 */
if (!function_exists('bd324_add_theme_support_logo')) :
   function bd324_add_theme_support_logo()
   {
      add_theme_support('custom-logo', array(
         'height'      => 100,
         'width'       => 100,
         'flex-height' => true,
         'flex-width'  => true,
         'header-text' => array(
            'site-title',
            'site-description'
         ),
      ));
   }
endif;
