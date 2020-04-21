<?php

/**
 * Thumbnail URI
 */

if (!function_exists('bd324_get_thumbnail_uri')) :
   function bd324_get_thumbnail_uri( $id, $size )
   {
      // Thumbnail image
      $thumbnail_url = get_the_post_thumbnail_url( $id, $size );
      $default_thumb_url = get_field('default_thumbnail', 'option');

      if ($thumbnail_url) {
         $image_url = $thumbnail_url;
      } elseif ($default_thumb_url) {
         $image_url = $default_thumb_url;
      } else {
         $image_url = get_stylesheet_directory_uri() . '/assets/images/thumbnail-default.jpg';
      }
      return $image_url;
   }
endif;
