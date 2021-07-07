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
      $text =           $group_content["block_text"];
      $title =          $group_content["block_title"];

      if (get_row_layout() != $row) {
         return;
      }
      if( $title ){
         $content .= bd324_header_wrapper($title, 'h2', array('header--section header--section--home'));
      }
      $content.= '<div class="text-block">';
      $content.= $text;
      $content.= '</div>';

      return $content;
   }
endif;

/**
 * Flex content - Image Gallery
 */
if (!function_exists('bd324_flex_content_image_gallery')) :
   function bd324_flex_content_image_gallery()
   {
      // Vars
      $row =      'image_gallery_section';
      $images =    get_sub_field('image_gallery_content');
      $count =     count($images);
      
      if($count == 1){
         $count_class = '1up';
      } elseif($count == 2) {
         $count_class = '2up';
      } else {
         $count_class = '3up';
      }

      if (get_row_layout() != $row) {
         return;
      }
      $content = '<div class="gallery gallery--' . $count_class . '">';
      foreach ($images as $image) :
         $content .= baindesign324_image_gallery_images($image);
      endforeach;
      $content .= '</div>';

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
      $row =      'blockquote';

      
      $group_content    = get_sub_field('block_content');
      $text =           $group_content["block_text"];
      $title =          $group_content["block_title"];
      $image =          $group_content["block_image"];
      $attr =           get_sub_field('blockquote-attribution');
      $image_url =      $image["url"];
      $content =        '';

      if (get_row_layout() != $row) {
         return;
      }

      // Image
      if( $image_url ){
         $content .= '<div class="post__image">';
         $content .= '<img src="';
         $content .= $image_url;
         $content .= '" />';
         $content .='</div>';
      }

      // Header
      if( $title ){
         $content .= '<h2 class="post__title">';
         $content .= $title;
         $content .='</h2>';
      }

      // Text 
      if( $text ){
         $content .= '<div class="post__body text-block">';
         $content .= '<blockquote>' . $text . '</blockquote>';
               // Attribution
         if( $attr ){
            $content .= '<div class="post__attribution blockquote__attribution"><span>';
            $content .= $attr;
            $content .='</span></div>';
         }
         $content .='</div>';
      }



      return $content;
   }
endif;

/**
 * Flex content - Single Testimonial
 */
if (!function_exists('bd324_flex_content_single_testimonial')) :
   function bd324_flex_content_single_testimonial()
   {
      // Vars
      $row =      'single_testimonial';
      $field =     get_sub_field('testimonial');
      $id =        $field->ID;

      if (get_row_layout() != $row) {
         return;
      }
      $content = '<div class="testimonial">';
      $content .= bd324_get_testimonial_content($id);
      $content .= '</div>';

      return $content;
   }
endif;

/**
 * Flex content - Testimonial Group
 */
if (!function_exists('bd324_flex_content_group_testimonial')) :
   function bd324_flex_content_group_testimonial()
   {
      // Vars
      $row =           'testimonial';
      $testimonials =   get_sub_field('testimonial');
      $count =          count($testimonials);
      if (get_row_layout() != $row) {
         return;
      }

      $content = '<div class="testimonials testimonials--count-' . $count . '">';
      foreach ($testimonials as $testimonial) :

         // Vars
         $id =          $testimonial->ID;

         $content .= '<div class="testimonial">';
         $content .= bd324_get_testimonial_content($id);
         $content .= '</div>';
      endforeach;
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
      $content =        '';
      
      // Check
      if (get_row_layout() != $row) {
         return;
      }

      // Debug
      // var_dump($image_url);

      // Output

      // Image
      if( $image_url ){
         $content .= '<div class="post__image">';
         $content .= '<img src="';
         $content .= $image_url;
         $content .= '" />';
         $content .='</div>';
      }

      // Header
      if( $title ){
         $content .= '<h2 class="post__title">';
         $content .= $title;
         $content .='</h2>';
      }

      // Text 
      if( $text ){
         $content .= '<div class="post__body text-block">';
         $content .= $text;
         $content .='</div>';
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
      if($orientation == 'image-left-text-right'){
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
      $repeater = get_sub_field( $field_repeater );

      
      // Check
      if (get_row_layout() != $row) {
         return;
      }
      if( have_rows( $field_repeater ) ):

         $content.= '<div class="team__wrapper">';
         $content.= $header;
         $content.= '<ul class="team">';

         while ( have_rows( $field_repeater ) ) : the_row();

            // Vars
            $post_id  = get_sub_field( 'member' );

            // Post data
            $name    = bd324_cpt_person_name($post_id);
            $image    = get_the_post_thumbnail_url($post_id);

            // Stand-alone data
            $role    = get_sub_field( 'role' );

            // Output
            $content.= bd324_kvp_team_member_card( $name, $role, $image );

         endwhile;
         $content.= '</ul>';
         $content.= '</div>';

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
   function bd324_flex_content_set_block_appearance_classes( $row )
   {
      if ( get_row_layout() != $row ) {
         return;
      }

      // Vars
      $group                     = get_sub_field( 'block_appearance' );
      $alignment                 = $group["block_alignment"];
      $padding                   = $group["block_padding"];
      $emphasis                  = $group["block_emphasis"];
      $background                = $group["block_background"];
      $custom_classes            = $group["block_class"];
      /* DEBUG */
      // var_dump($custom_classes);

      $block_appearance_classes  = array();

      // Alignment
      if( $alignment == 'left'){
         $block_appearance_classes[] = 'block--appearance--alignment--left';
      } else {
         $block_appearance_classes[] = 'block--appearance--alignment--right';
      }

      // Padding
      if( $padding == 'yes'){
         $block_appearance_classes[] = 'block--appearance--padding';
      } else {
         $block_appearance_classes[] = 'block--appearance--padding--none';
      }

      // background
      if( $background == 'alt'){
         $block_appearance_classes[] = 'block--appearance--background--alt';
      }

      // Emphasis
      if( $emphasis == 'yes'){
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
      // var_dump($block_appearance_classes);

      if( $custom_classes ){
         // Merge $custom_classes array with our
         // $block_appearance_classes array.
         $block_appearance_classes = array_merge( 
            $block_appearance_classes,
            $custom_classes
         );
      }
      

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
   function bd324_flex_content_set_block_content_classes( $row )
   {
      if ( get_row_layout() != $row ) {
         return;
      }

      // Vars
      $group                     = get_sub_field( 'block_content' );
      $header                    = $group["block_header"];
      $image                     = $group["block_image"];
      $block_content_classes     = array();

      // Header
      if( !$header ){
         $block_content_classes[] = 'block--content--header--none';
      } else {
         $block_content_classes[] = 'block--content--header';
      }

      // Padding
      if( !$image ){
         $block_content_classes[] = 'block--content--image--none';
      } else {
         $block_content_classes[] = 'block--content--image';
      }
      
      return $block_content_classes;

   }
endif;