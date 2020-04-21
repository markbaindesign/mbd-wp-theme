<?php bd324_show_cover(); ?>
<?php do_action('baindesign324_article_before'); ?>
<?php do_action('baindesign324_content_before'); ?>
<?php // Posts/page flex content
if (have_rows('posts_page_flexible_content_sections')) :
   while (have_rows('posts_page_flexible_content_sections')) : the_row();

      if (bd324_flex_content_text_block()) :
         $classes = array(
            'section--text-block',
            'section--flex'
         );
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_text_block();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      elseif (bd324_flex_content_image_gallery()) :
         $classes = array('section--gallery', 'section--flex');
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_image_gallery();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      elseif (bd324_flex_content_blockquote()) :
         $classes = array('section--blockquote', 'section--flex');
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


      elseif (get_row_layout() == 'mailchimp_signup_form_layout') :
         $classes = array(
            'section--flex',
            'section--mailchimp'
         );
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         baindesign324_mailchimp_form();
         baindesign324_generic_wrapper(NULL, NULL, 'close');

      elseif (bd324_flex_content_media_block()) :
         // Check orientation
         $orientation = bd324_flex_content_check_media_block_orientation();

         // Set classes
         $classes = array(
            'section--media-block', 
            'section--flex',
            'section--media-block--image-' . $orientation
         );

         // Output
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo bd324_flex_content_media_block();
         baindesign324_generic_wrapper(NULL, NULL, 'close');
?>

      <?php endif; ?>
   <?php endwhile; ?>
<?php else :
   $classes = array(
      'section--text-block',
      'section--not-flex'
   );
   baindesign324_generic_wrapper(NULL, $classes, NULL); ?>
   <div class="text-block">
      <?php the_content(); ?>
   </div>
<?php baindesign324_generic_wrapper(NULL, NULL, 'close');
endif;
do_action('baindesign324_content_after');
