<?php bd324_show_cover(); ?>
<?php do_action('baindesign324_article_before'); ?>
<?php echo '<div class="flex-content-wrapper">'; ?>
<?php do_action('baindesign324_content_before'); ?>
<?php // Posts/page flex content
if (have_rows('posts_page_flexible_content_sections')) :
   while (have_rows('posts_page_flexible_content_sections')) : the_row();

      if (bd324_flex_content_text_block()) :

         // Vars
         $appearance_classes = bd324_flex_content_set_block_appearance_classes('text_block');
         // Default Classes
         $classes = array(
            'section--text-block',
            'section--flex',
            'block'
         );

         if ($appearance_classes) {
            // Merge $appearance_classes array with our
            // default $classes array.
            $classes = array_merge(
               $classes,
               $appearance_classes
            );
         }

         baindesign324_generic_wrapper(NULL, $classes, NULL, '', 'fade-in', '1000');
         echo bd324_flex_content_text_block();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

         /**
          * Blockquote
          */

      elseif (bd324_flex_content_blockquote()) :
         $appearance_classes = bd324_flex_content_set_block_appearance_classes('blockquote');
         $content_classes = bd324_flex_content_set_block_content_classes('blockquote');
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
         baindesign324_generic_wrapper(NULL, $classes, NULL, '', 'fade-in', '1000');
         do_action('bd324_blockquote_section_before');
         echo bd324_flex_content_blockquote();
         do_action('bd324_blockquote_section_after');
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      elseif (bd324_flex_content_group_testimonial()) :
         $classes = array('section--testimonials', 'section--flex');
         baindesign324_generic_wrapper(NULL, $classes, NULL, '', 'fade-in', '1000');
         echo bd324_flex_content_group_testimonial();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

         /**
          * Media Block
          **/

      elseif (bd324_flex_content_media_block()) :
         
         // Check orientation
         $orientation = bd324_flex_content_check_media_block_orientation();
         $appearance_classes = bd324_flex_content_set_block_appearance_classes('media_block');

         // Set classes
         $classes = array(
            'section--media-block',
            'block',
            'section--flex',
            'section--media-block--image-' . $orientation,
         );

         if ($appearance_classes) {
            $classes = array_merge(
               $classes,  // array
               $appearance_classes // array
            );
         }

         // Output
         baindesign324_generic_wrapper(NULL, $classes, NULL, '', 'fade-in', '1000');
         echo bd324_flex_content_media_block();
         baindesign324_generic_wrapper(NULL, NULL, 'close');
?>

      <?php endif; ?>
   <?php endwhile; ?>
<?php else :
   $classes = array(
      'section--not-flex'
   );
   baindesign324_generic_wrapper(NULL, $classes, NULL, '', 'fade-in', '1000'); ?>
      <?php the_content(); ?>
<?php baindesign324_generic_wrapper(NULL, NULL, 'close');
endif;
do_action('baindesign324_content_after');
echo '</div>';
