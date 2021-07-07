<?php bd324_show_cover(); ?>
<?php do_action('baindesign324_article_before'); ?>
<?php echo '<div class="flex-content-wrapper">'; ?>
<?php do_action('baindesign324_content_before'); ?>
<?php // Posts/page flex content
if (have_rows('posts_page_flexible_content_sections')) :
   while (have_rows('posts_page_flexible_content_sections')) : the_row();

      if (bd324_flex_content_text_block()) :
         
         // Vars
         $alignment = get_sub_field('alignment_text_block');
         $appearance_classes = bd324_flex_content_set_block_appearance_classes( 'text_block' );

         // Default Classes
         $classes = array(
            'section--text-block',
            'section--flex',
            'block'
         );

         if( $appearance_classes ){
            // Merge $appearance_classes array with our
            // $classes array.
            $classes = array_merge( 
               $classes, 
               $appearance_classes
            );
         }

         // Alignment Class
         if ( $alignment ) { // Should be, but JIC.
            array_push($classes, 'block--' . $alignment);
         }

         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_text_block();
         baindesign324_generic_wrapper(NULL, NULL, 'close');
      
      /**
       * Image Gallery
       **/

      elseif (bd324_flex_content_image_gallery()) :
         $classes = array('section--gallery', 'section--flex');
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_image_gallery();
         baindesign324_generic_wrapper(NULL, NULL, 'close');
      
      /**
       * Blockquote
       */

      elseif (bd324_flex_content_blockquote()) :
         $appearance_classes = bd324_flex_content_set_block_appearance_classes( 'blockquote' );
         $content_classes = bd324_flex_content_set_block_content_classes( 'blockquote' );
         // Default Classes
         $my_classes = array(
            'section--blockquote',
            'section--flex',
            'block'
         );
         $classes = array_merge( 
            $my_classes, 
            $appearance_classes,
            $content_classes
         );
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_blockquote();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      elseif (bd324_flex_content_single_testimonial()) :
         $classes = array('section--testimonial', 'section--flex');
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_single_testimonial();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      elseif (bd324_flex_content_group_testimonial()) :
         $classes = array('section--testimonials', 'section--flex');
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_group_testimonial();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      /* elseif (baindesign324_display_twitter_feed()) :
         $classes = array('section--twitter', 'section--flex');
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         baindesign324_display_twitter_feed('front');
         baindesign324_generic_wrapper(NULL, NULL, 'close');*/

      elseif (get_row_layout() == 'latest_blog_posts_layout') :
         get_template_part('section','posts');
      
      /**
      * Block Divider
      **/

      elseif (get_row_layout() == 'block_divider') :
         
         $transition = get_sub_field('background_color_transition');
         /* DEBUG */
         // var_dump($transition);

         $classes = array(
            'section--flex',
            'section--block-divider',
            'section--block-divider--' . $transition,
         );
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      /**
      * Mailchimp
      **/

      elseif (get_row_layout() == 'mailchimp_signup_form_layout') :
         $classes = array(
            'section--flex',
            'section--mailchimp'
         );
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         baindesign324_mailchimp_form();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      /**
       * Team Members Block
       **/

      elseif ( get_row_layout() == 'team_members_block' ) :

         // Set classes
         $classes = array( 'section--team', 'block', 'section--flex' );

         // Output
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_team_block();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      /**
       * Media Block
       **/

      elseif ( bd324_flex_content_media_block() ) :
         // Check orientation
         $orientation = bd324_flex_content_check_media_block_orientation();
         $appearance_classes = bd324_flex_content_set_block_appearance_classes( 'media_block' );
         // var_dump($appearance_classes);

         // Set classes
         $classes = array(
            'section--media-block',
            'block',
            'section--flex',
            'section--media-block--image-' . $orientation,
         );

         if( $appearance_classes ){
            // Merge $appearance_classes array with our
            // $classes array.
            $classes = array_merge( 
               $classes, 
               $appearance_classes
            );
         }

         // Output
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_media_block();
         baindesign324_generic_wrapper(NULL, NULL, 'close');
?>

      <?php endif; ?>
   <?php endwhile; ?>
<?php else :
   $classes = array(
      'section--not-flex'
   );
   baindesign324_generic_wrapper(NULL, $classes, NULL); ?>
      <?php the_content(); ?>
<?php baindesign324_generic_wrapper(NULL, NULL, 'close');
endif;
do_action('baindesign324_content_after');
echo '</div>';
