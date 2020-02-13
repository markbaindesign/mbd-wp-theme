<?php

/**
 * Media object block 
 */

if (!function_exists('baindesign324_media_block')) :
   function baindesign324_media_block()
   {
      $id = get_the_ID();

      $text =        get_sub_field('media_block_text',      $id);
      $title =       get_sub_field('media_block_title',     $id);
      $link =        get_sub_field('media_block_link',      $id);
      $link_text =   get_sub_field('media_block_link_text', $id);
      $image_array = get_sub_field('media_block_image',     $id);
      $image_left =  get_sub_field('image_position',        $id);

      $image_url =   $image_array["url"];
      $group_class = get_sub_field('media_object_group_class');
      $group_id =    get_sub_field('media_object_group_id');

      // Default classes
      $classes = array(
         'post',
         'media-block',
         'post--frontpage'
      );

      // Set classes based on returned fields
      if(!$title){
         $classes[] = 'media-block--no-title';
      }
      if(!$image_array){
         $classes[] = 'media-block--no-image';
      }
      if ($image_left == TRUE) {
         $classes[] = 'media-block--image-left';
      }

      // Output

      // Open wrapper with classes based on 
      // returned fields, which is why we do
      // this here instead of before we call 
      // the content.
      // This allows us to style the layout
      // based on the fields returned. 
      baindesign324_generic_wrapper(NULL, $classes, NULL);

      // Get the image
      bd324_show_article_aside();

      if($title){
         echo '<section class="article__header"><h1>';
         echo $title;
         bd324_cpt_person_name($id);
         echo '</h1>';
         bd324_cpt_person_meta($id);
         bd324_page_external_links($id);
         echo '</section>';
      }

      echo '<section class="article__body">';
      echo $text;
      if($link){
         echo '<div class="post__more"><a href="' . $link . '">' . $link_text . '</a></div>';
      }
      echo '</section>';

      baindesign324_generic_wrapper(NULL, NULL, 'close');
   }
endif;
