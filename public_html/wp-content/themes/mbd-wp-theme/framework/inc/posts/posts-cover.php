<?php

/**
 * Display a post cover section
 */
if (!function_exists('bd324_show_cover')) :
   function bd324_show_cover()
   {
      // Vars
      $classes = array(
         'section--cover'
      );
      if (bd324_get_cover_intro()) {
         $classes[] = 'section--cover--with-intro';
      }
      if (bd324_cover_image()) {
         $classes[] = 'section--cover--with-image';
      }

      baindesign324_generic_wrapper(NULL, $classes, NULL, '', 'fade-in', '800');
      do_action('baindesign324_cover_top');
      echo '<div class="cover__content__wrapper">';
      bd324_show_article_header();
      echo bd324_get_cover_intro();
      echo '</div>';
      echo bd324_cover_image();
      do_action('baindesign324_cover_bottom');
      baindesign324_generic_wrapper(NULL, NULL, 'close');
   }
endif;

/**
 * Display a post cover section (LEGACY)
 */
if (!function_exists('baindesign324_cover')) :
   function baindesign324_cover()
   {

      // Defaults
      // $archive_image=$cover_image_url=$cover_image_position_horizontal=$cover_image_position_vertical=$cover_text='';

      // $cover_image_default 			= get_theme_mod( 'baindesign324_default_archive_image', '' );
      $cover_text_vertical_alignment    = 'middle';

      /**
       * Cover class array
       */

      $cover_class = array();

      /**
       *
       * Theme Mods
       * 
       * By establishing the post type, we can check for a
       * theme mod (via the Customizer) for this post type. 
       * 
       **/
      $post_type             = get_post_type();
      $tm_cover_image_title    = 'baindesign324_' . $post_type . '_archive_image';
      $tm_cover_image_url    = get_theme_mod($tm_cover_image_title, '');

      // TODO
      // Replace this Customizer stuff with ACF options

      /**
       *
       * Custom Fields
       * 
       * Single posts/pages can set a cover image via a
       * custom field. 
       * 
       **/
      $cf_cover_image_url                = get_field('cover_image');
      $cf_cover_image_position_horizontal    = get_field('image_position_horizontal');
      $cf_cover_image_position_vertical       = get_field('image_position_vertical');
      $cf_cover_text                      = get_field('cover_text');
      $cf_cover_text_vertical_alignment = get_field('cover_text_vertical_alignment');
      $cf_cover_content_color             = get_field('cover_content_color');

      // Post type archive pages
      if (is_post_type_archive()) {

         $cover_class_context = 'cover-archive';

         if ($tm_cover_image_url) {
            $cover_class_source = 'cover-theme_mod';
            $cover_image_url = $tm_cover_image_url;
            $cover_text = '';

            // Default
         } else {
            $cover_class_source = 'cover-default';
            $cover_image_url = $cover_image_default;
            $cover_text = '';
         }

         // Taxonomy archive pages
      } elseif (is_tax()) {
         $cover_class_context = 'cover-tax';
         if (function_exists('z_taxonomy_image_url')) {
            $cover_image_url = z_taxonomy_image_url();
         } else {
            $cover_image_url = $cover_image_default;
            $cover_text = '';
         }

         // Blog archive page
      } elseif (is_home()) {

         /**
          * To pull content from the designated blog page, we need
          * to first establish the page ID of the blog page. 
          **/

         $page_id = ('page' == get_option('show_on_front') ? get_option('page_for_posts') : get_the_ID);

         $cf_cover_image_url                = get_field('cover_image', $page_id);
         $cf_cover_image_position_horizontal    = get_field('image_position_horizontal', $page_id);
         $cf_cover_image_position_vertical       = get_field('image_position_vertical', $page_id);


         $cf_cover_text                      = get_field('cover_text', $page_id);
         $cf_cover_text_vertical_alignment       = get_field('cover_text_vertical_alignment', $page_id);

         $cover_class_context = 'cover-home';

         if ($cf_cover_image_url) {
            $cover_image_url = $cf_cover_image_url;
            $cover_class_source = 'cover-source-custom-field';
            $cover_image_position_horizontal = $cf_cover_image_position_horizontal;
            $cover_image_position_vertical = $cf_cover_image_position_vertical;
         }

         // Cover text
         if ($cf_cover_text) {
            $cover_text = $cf_cover_text;
            if ($cf_cover_text_vertical_alignment) {
               $cover_text_vertical_alignment = $cf_cover_text_vertical_alignment;
            }
         } else {
            $cover_text = get_the_title($post);
         }
      } else {

         // Post & pages

         // For posts/pages, don't show a cover image unless
         // specified.	    

         if ($cf_cover_image_url) {
            $cover_image_url = $cf_cover_image_url;
            $cover_class_source = 'cover-source-custom-field';
            $cover_image_position_horizontal = $cf_cover_image_position_horizontal;
            $cover_image_position_vertical = $cf_cover_image_position_vertical;
         }

         // Cover text
         // Archives for categories, tags, taxonomies.
         if (is_tax() || is_category() || is_tag()) {
            $content = '<h1>' . baindesign324_title_archive($post_type) . '</h1>';
            $content .= baindesign324_archive_intro($post_type);
            $cf_cover_text = $content;
         }

         if ($cf_cover_text) {
            $cover_class[] = 'cover__custom-text';
            $cover_text = $cf_cover_text;
         } else {
            $cover_text = '<h1>' . get_the_title() . '</h1>';
            $cover_class[] = 'cover__custom-text__none';
         }

         if ($cf_cover_text_vertical_alignment) {
            $cover_text_vertical_alignment = $cf_cover_text_vertical_alignment;
         }
      }

      // var_dump($cover_text);





      /**
       * Cover class array -- Image or no image?
       */

      if ($cover_image_url) {
         $cover_class[] = 'cover__image';

         // Styles

         /**
          *
          * Inline Styles
          * 
          * The background image (if it exists) is added and positioned
          * with inline styles using these variables:
          * 
          * $cover_image_url
          * $cover_image_position_horizontal
          * $cover_image_position_vertical
          *
          * Inline styles allow us to set *actual values* via 
          * field data, e.g. positioning, color...
          *  
          * These are not required for more general settings
          *
          **/

         $inline_style  = 'background-image: url(' . $cover_image_url . ');';
         $inline_style .= 'background-position: ' . $cover_image_position_horizontal . '% ' . $cover_image_position_vertical . '%; ';
         $inline_style .= 'position: relative;'; // Allows overlay absolute position
         /**
          * Cover class array -- Content color?
          */
         if ($cf_cover_content_color == 'light') {
            $cover_class[] = 'cover__dark-image';
         } else {
            $cover_class[] = 'cover__light-image';
         }

         /**
          * Cover class array -- Content alignment
          */
         if ($cover_text_vertical_alignment == 'top') {
            $cover_class[] = 'cover__content__top';
         } elseif ($cover_text_vertical_alignment == 'bottom') {
            $cover_class[] = 'cover__content__bottom';
         } else {
            $cover_class[] = 'cover__content__middle';
         }
      } else {
         // No cover image
         $cover_class[] = 'cover__image__none';
         $inline_style = 'min-height: 0;';
      }

      // TODO
      // Set body class based on cover image
      // so we can make changes to the header
      // if there's a cover e.g. overlay it. 

?>

      <div id="cover" class="section cover__section cover <?php echo implode(' ', $cover_class); ?> <?php echo $cover_class_source; ?>" style="<?php echo $inline_style; ?>">
         <div class="container cover__container">
            <?php do_action('baindesign324_cover_top'); ?>
            <?php echo bd324_cover_image(); ?>
            <?php if ($cover_text) : ?>
               <?php echo $cover_text; ?>
            <?php endif; ?>
            <?php do_action('baindesign324_cover_bottom'); ?>
         </div>
      </div><!-- .cover__section -->

<?php }
endif;

/**
 * Show the cover image
 */
if (!function_exists('bd324_cover_image')) :
   function bd324_cover_image($post_id = NULL)
   {
      // Vars
      $image = get_field('cover_image', $post_id);

      if (!$image) {
         return;
      }
      $content = '<figure class="cover__image">';
      $content .= '<img src="' . $image["url"] . '" ';
      if ($image["title"]) {
         $content .= 'title="' . $image["title"] . '" ';
      }
      $content .= '/>';
      $content .= '</figure>';

      return $content;
   }
endif;

/**
 * Get the cover intro text
 */
if (!function_exists('bd324_get_cover_intro')) :
   function bd324_get_cover_intro($post_id = NULL)
   {
      // Vars
      $intro = get_field('cover_text', $post_id);

      if (!$intro) {
         return;
      }
      $content = '<div class="cover__intro" data-aos="fade-in" data-aos-duration="1000">';
      $content .= $intro;
      $content .= '</div>';

      return $content;
   }
endif;
