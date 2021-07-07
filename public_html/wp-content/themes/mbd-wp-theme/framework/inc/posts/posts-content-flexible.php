<?php

/**
 * Display flexible content
 * 
 * Used on Front Page
 * 
 * OBSOLETE!
 */

if (!function_exists('bd324_flex_content')) :
   function bd324_flex_content()
   {
      if (get_row_layout() == 'image_gallery_section') :
         $classes = array(
            'gallery',
            'gallery--front'
         );
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         baindesign324_image_gallery();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

         /**
          * Media block
          */
      elseif (get_row_layout() == 'media_block') :
         baindesign324_media_block();

      // Testimonials
      elseif (get_row_layout() == 'testimonials_layout') :
         $classes =  array(
            'testimonials',
            'testimonials--front'
         );
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         bd324_get_testimonials();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      elseif (bd324_flex_content_group_testimonial()) :
         $classes = array('section--testimonials', 'section--flex');
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_group_testimonial();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      // Twitter Feed Layout
      elseif (get_row_layout() == 'twitter_feed_layout') :
         $classes = array(
            'feed',
            'feed--twitter',
            'feed--twitter--front'
         );
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         baindesign324_display_twitter_feed('front');
         baindesign324_generic_wrapper(NULL, NULL, 'close');

         /**
          * Latest Blog Posts
          */
      elseif (get_row_layout() == 'latest_blog_posts_layout') :
         baindesign324_latest_blog_posts();

      // Mailchimp Newsletter Signup Form
      elseif (get_row_layout() == 'mailchimp_signup_form_layout') :
         bd24_mailchimp_form_section();

      // Gallery 
      elseif (get_row_layout() == 'gallery_wide') :
         $classes = array(
            'gallery',
            'gallery--front'
         );
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         get_template_part('modules/gallery'); // TODO
         baindesign324_generic_wrapper(NULL, NULL, 'close');
      endif;
   }
endif;

/**
 * Flex content - Text block
 */
if (!function_exists('bd324_flex_content_text_block')) :
   function bd324_flex_content_text_block()
   {
      // Vars
      $content = '';
      $row =      'text_block';
      $group_content    = get_sub_field('block_content');

      // Check array keys exist
      // before assigning to vars
      if (isset($group_content["block_text"])) {
         $text = $group_content["block_text"];
      }
      if (isset($group_content["block_title"])) {
         $title = $group_content["block_title"];
      }

      if (get_row_layout() != $row) {
         return;
      }
      if ($title) {
         $content .= bd324_header_wrapper($title, 'h2', array('header--section header--section--home'));
      }
      $content .= '<div class="text-block">';
      $content .= $text;
      $content .= '</div>';

      return $content;
   }
endif;

/**
 * Flex content - Image Gallery
 */
if (!function_exists('bd324_flex_content_image_gallery')) :
   function bd324_flex_content_image_gallery()
   {
      if (get_row_layout() != 'image_gallery_section') {
         return;
      }
      // Vars
      $content = '';
      $images = get_sub_field('image_gallery_content');

      $content = '<div class="gallery';
      // Add a class based on number of images
      if (isset($images) && is_array($images)) {
         $count_class = count($images) . 'up';
         // var_dump($images);
         $content .= ' gallery--' . $count_class;
      }
      $content .= '">';
      if (is_array($images) || is_object($images)) {
         foreach ($images as $image) :
            $content .= baindesign324_image_gallery_images($image);
         endforeach;
         $content .= '</div>';
      }

      return $content;
   }
endif;


/**
 * Flex content - Blockquote
 */
if (!function_exists('bd324_flex_content_blockquote')) :
   function bd324_flex_content_blockquote()
   {
      // Vars
      $row = 'blockquote';
      $group_content = get_sub_field('block_content');
      $attr = get_sub_field('blockquote-attribution');
      $text = '';
      $title = '';
      $image = '';
      $image_url = '';
      $content = '';

      if (isset($group_content["block_text"])) {
         $text = $group_content["block_text"];
      }
      if (isset($group_content["block_title"])) {
         $title = $group_content["block_title"];
      }
      if (isset($group_content["block_image"])) {
         $image =          $group_content["block_image"];
         $image_url =      $image["url"];
      }

      if (get_row_layout() != $row) {
         return;
      }

      // Image
      if ($image_url) {
         $content .= '<div class="post__image">';
         $content .= '<img src="';
         $content .= $image_url;
         $content .= '" />';
         $content .= '</div>';
      }

      // Header
      if ($title) {
         $content .= '<h2 class="post__title">';
         $content .= $title;
         $content .= '</h2>';
      }

      // Text 
      if ($text) {
         $content .= '<div class="post__body text-block">';
         $content .= '<blockquote>' . $text . '</blockquote>';
         // Attribution
         if ($attr) {
            $content .= '<div class="post__attribution blockquote__attribution"><span>';
            $content .= $attr;
            $content .= '</span></div>';
         }
         $content .= '</div>';
      }



      return $content;
   }
endif;

/**
 * Flex content - Testimonial Group
 */
if (!function_exists('bd324_flex_content_group_testimonial')) :
   function bd324_flex_content_group_testimonial()
   {
      if (get_row_layout() != 'testimonial') {
         return;
      }

      // Vars
      $content = '';
      $testimonials = get_sub_field('testimonial');

      $content = '<div class="testimonials';
      // Add a class based on number of images
      if (isset($testimonials) && is_array($testimonials)) {
         $count_class = count($testimonials) . 'up';
         // var_dump($testimonials);
         $content .= ' testimonials--' . $count_class;
      }
      $content .= '">';
      if (is_array($testimonials) || is_object($testimonials)) {
         foreach ($testimonials as $testimonial) {
            $id = $testimonial->ID;
            $content .= '<div class="testimonial">';
            $content .= bd324_get_testimonial_content($id);
            $content .= '</div>';
         }
      }


      $content .= '</div>';



      return $content;
   }
endif;

/**
 * Flex content - Media Block
 */
if (!function_exists('bd324_flex_content_media_block')) :
   function bd324_flex_content_media_block()
   {
      
      // Vars
      $row =            'media_block';
      $group_content    = get_sub_field('block_content');
      $text =           $group_content["block_text"];
      $title =          $group_content["block_title"];
      $image =          $group_content["block_image"];
      $image_url =      $image["url"];
      $content =        'media';

      // Check
      if (get_row_layout() != $row) {
         return;
      }

      // Debug
      // var_dump($image_url);

      // Output

      // Image
      if ($image_url) {
         $content .= '<div class="post__image">';
         $content .= '<img src="';
         $content .= $image_url;
         $content .= '" />';
         $content .= '</div>';
      }

      // Header
      if ($title) {
         $content .= '<h2 class="post__title">';
         $content .= $title;
         $content .= '</h2>';
      }

      // Text 
      if ($text) {
         $content .= '<div class="post__body text-block">';
         $content .= $text;
         $content .= '</div>';
      }

      return $content;
   }
endif;

/**
 * Flex content - Media Block Orientation Checker
 */
if (!function_exists('bd324_flex_content_check_media_block_orientation')) :
   function bd324_flex_content_check_media_block_orientation()
   {
      $row = 'media_block';
      if (get_row_layout() != $row) {
         return;
      }

      $group = get_sub_field('media_block_content');
      $orientation = $group["media_block_orientation"];

      // Return image position
      if ($orientation == 'image-left-text-right') {
         $content = 'left';
      } else {
         $content = 'right';
      }
      return $content;
   }
endif;

/**
 * Flex content - Team Members Block
 */
if (!function_exists('bd324_flex_content_team_block')) :
   function bd324_flex_content_team_block()
   {
      // Vars
      $content = '';
      $row = 'team_members_block';
      $field_repeater = 'team_members_repeater';

      $header = get_sub_field('section_header');
      $repeater = get_sub_field($field_repeater);


      // Check
      if (get_row_layout() != $row) {
         return;
      }
      if (have_rows($field_repeater)) :

         $content .= '<div class="team__wrapper">';
         $content .= $header;
         $content .= '<ul class="team">';

         while (have_rows($field_repeater)) : the_row();

            // Vars
            $post_id  = get_sub_field('member');

            // Post data
            if (function_exists('bd324_get_person_name')) {
               $name = bd324_get_person_name($post_id);
            }
            // var_dump($name);
            $image      = get_the_post_thumbnail_url($post_id);
            $bio        = get_the_excerpt($post_id);
            $url        = get_the_permalink($post_id);

            // Stand-alone data
            $role    = get_sub_field('role');

            // Output
            if (function_exists('bd324_kvp_team_member_card')) {
               $content .= bd324_kvp_team_member_card($name, $role, $image, $url, $bio);
            }
         endwhile;
         $content .= '</ul>';
         $content .= '</div>';

      endif;

      return $content;
   }
endif;

/**
 * Flex content -- Block Appearance Classes Setter
 * 
 * @param $row
 * @return array $block_appearance_classes
 * 
 */
if (!function_exists('bd324_flex_content_set_block_appearance_classes')) :
   function bd324_flex_content_set_block_appearance_classes($row)
   {
      if (get_row_layout() != $row) {
         return;
      }

      // Vars
      $alignment                 = '';
      $padding                   = '';
      $emphasis                  = '';
      $background                = '';
      $custom_class            = '';
      $block_appearance_classes  = array();

      $group                     = get_sub_field('block_appearance');
      /* DEBUG */
      // var_dump($group);

      if (isset($group["block_alignment"])) {
         $alignment = $group["block_alignment"];
      }
      if (isset($group["block_padding"])) {
         $padding = $group["block_padding"];
      }
      if (isset($group["block_emphasis"])) {
         $emphasis = $group["block_emphasis"];
      }
      if (isset($group["block_background"])) {
         $background = $group["block_background"];
      }
      if (isset($group["block_class"])) {
         $custom_class = $group["block_class"];
         /* DEBUG */
         // var_dump($custom_classes);
      }


      // Alignment
      if ($alignment == 'left') {
         $block_appearance_classes[] = 'block--appearance--alignment--left';
      } else {
         $block_appearance_classes[] = 'block--appearance--alignment--right';
      }

      // Padding
      if ($padding == 'yes') {
         $block_appearance_classes[] = 'block--appearance--padding';
      } elseif ($padding == 'no-bottom') {
         $block_appearance_classes[] = 'block--appearance--padding--none--bottom';
      } elseif ($padding == 'no-top') {
         $block_appearance_classes[] = 'block--appearance--padding--none--top';
      } else {
         $block_appearance_classes[] = 'block--appearance--padding--none';
      }

      // background
      if (isset($background) &&  $background == 'alt') {
         $block_appearance_classes[] = 'block--appearance--background--alt';
      }

      // Emphasis
      if ($emphasis == 'yes') {
         $block_appearance_classes[] = 'block--appearance--emphasis';
      } else {
         $block_appearance_classes[] = 'block--appearance--emphasis--none';
      }

      // Custom Classes
      // **************
      // These classes are added to blocks via the custom class
      // field.

      /* DEBUG */
      // var_dump($custom_classes);

      if ($custom_class) {
         // Merge $custom_classes array with our
         // $block_appearance_classes array.
         $block_appearance_classes[] = $custom_class;
      }
      // var_dump($block_appearance_classes);


      return $block_appearance_classes;
   }
endif;

/**
 * Flex content -- Block Content Classes Setter
 * 
 * @param $row
 * @return array $block_content_classes
 * 
 */
if (!function_exists('bd324_flex_content_set_block_content_classes')) :
   function bd324_flex_content_set_block_content_classes($row)
   {
      if (get_row_layout() != $row) {
         return;
      }

      // Vars
      $block_content_classes     = array();
      $group_content = get_sub_field('block_content');

      // Header
      if (isset($group_content["block_header"])) {
         $block_content_classes[] = 'block--content--header';
      }

      // Image
      if ($group_content["block_image"] != FALSE) {
         $block_content_classes[] = 'block--content--image';
      }

      return $block_content_classes;
   }
endif;
