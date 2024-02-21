<?php

/**
 * Content latest post
 */

if (!function_exists('baindesign324_content_latest_post')) :
   function baindesign324_content_latest_post($post_type = 'post')
   {
            $id = get_the_id();
            $thumb_id = get_post_thumbnail_id($id);
            $link = get_the_permalink($id);
            $size = '';
            $image_url_array = wp_get_attachment_image_src($thumb_id, $size, FALSE);
            $image_url = $image_url_array[0];
            $mobile_image_url = wp_get_attachment_image_src($thumb_id, 'golden', true);
            $media_object_media_content = '';
            $classes = array(
               'media-object',
               $post_type
            );
            $post_classes = implode(" ",$classes);
         ?>

            <div class="<?php echo $post_classes;?>">

               <?php
               // Only show the media if it exists 
               if (has_post_thumbnail()) {
                  $media_object_media_content = '<div class="media-object-media match-height">';
                  $media_object_media_content .= '<a href="' . $link . '">';
                  $media_object_media_content .=   '<img src="' . $image_url . '" class="mobile-image">';
                  $media_object_media_content .= '</a></div><!-- .media-object-media -->';
                  $media_object_media_content .= '<article class="media-object-content match-height">';
               } else {
                  $media_object_media_content = '<article class="media-object-content" style="width: 100%;">';
               }
               echo $media_object_media_content;
               ?>


               <header>
                  <div class="latest"><span><?php _e('Latest', '_baindesign'); ?></span></div>
                  <div class="entry-title">
                     <h2><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a></h2>
                  </div>
                  <div class="post-meta"><span><?php echo get_the_date(); ?></span></div>
               </header>
               <?php the_excerpt(); ?>
               <footer class="read-more">
                  <a href="<?php the_permalink(); ?>" title="<?php _e('Go to', '_baindesign'); ?> <?php the_title(); ?>"><span class="visuallyhidden"><?php _e('Read more', '_baindesign'); ?></span><i class="fa"></i></a>
               </footer>
               </article><!-- .media-object-content -->
            </div><!-- .media-object -->
      
<?php
   }
endif;
