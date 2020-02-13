<?php

/**
 * Content default
 */

if (!function_exists('baindesign324_content')) :
   function baindesign324_content()
   {
      echo '<div class="post__content">';
      do_action('baindesign324_content_before');

      // First check homepage flex content
      if (have_rows('home_page_flexible_content_sections')) :
         while (have_rows('home_page_flexible_content_sections')) : the_row();
            bd324_flex_content();
         endwhile;
      
      // Next check posts/page flex content
      elseif(have_rows('posts_page_flexible_content_sections')):
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
      // Vars - cover
      $cover = get_field('cover_image');

      // Vars - media block
      $media_array = get_sub_field('media_block_image');
      $media = $media_array["url"];

      if ($cover) {
         $url = $cover;
      } elseif ($media) {
         $url = $media;
      } else {
         return;
      }
      $content ='<figure><img src="' . $url . '" class="post__image"></figure>';

      return $content;
   }
endif;

// Article aside
if (!function_exists('bd324_show_article_aside')) :
   function bd324_show_article_aside()
   {
      echo '<aside class="article__aside">';
      echo bd324_get_cover_image();
      echo '</aside>';
   }
endif;

// Article header
if (!function_exists('bd324_show_article_header')) :
   function bd324_show_article_header()
   {
      echo '<header class="article__header">';
      echo baindesign324_post_title();
      echo baindesign324_post_author();
      echo bd324_get_post_date();
      echo '</header>';
   }
endif;
