<?php

/**
 * Content default
 */

if (!function_exists('baindesign324_content')) :
   function baindesign324_content()
   {
      echo '<div class="post__content">';
      do_action('baindesign324_content_before');
      
      // Next check posts/page flex content
      if(have_rows('posts_page_flexible_content_sections')):
         while (have_rows('posts_page_flexible_content_sections')) : the_row();
            baindesign324_flexible_content();
         endwhile;
      // Finally, check default content
      else:
         the_content();
      endif;
      do_action('baindesign324_content_after');
      echo '</div>';
   }
endif;

// Post cover image
if (!function_exists('bd324_get_cover_image')) :
   function bd324_get_cover_image()
   {
      // Vars
      $url = bd324_get_the_post_image_url();
      if ($url){
         $content ='<figure><img src="' . $url . '" class="post__image"></figure>';
      }
      return $content;
   }
endif;

/**
 * Get the post image
 * 
 */
if (!function_exists('bd324_get_the_post_image_url')) :
   function bd324_get_the_post_image_url()
   {
      // Vars
      $cover = get_field('cover_image');
      $media_array = get_sub_field('media_block_image');
      $media = $media_array["url"];

      if ($cover) {
         $url = $cover["url"];
      } elseif ($media) {
         $url = $media;
      }
      return $url;
   }
endif;

/**
 * Show Post aside
 * 
 * Display a post aside
 * 
 **/
if (!function_exists('bd324_show_article_aside')) :
   function bd324_show_article_aside()
   {
      echo '<aside class="post__image">';
      echo bd324_get_cover_image();
      echo '</aside>';
   }
endif;

/**
 * Show Post header
 * 
 * Display a post header
 * Apart from the post title, this may also contain
 * the author, the date, post categories and other 
 * post meta data.
 **/
if (!function_exists('bd324_show_article_header')) :
   function bd324_show_article_header()
   {
      echo '<header class="post__header">';
      echo baindesign324_post_title();
      echo baindesign324_post_author();
      echo bd324_get_post_date();
      echo '</header>';
   }
endif;
