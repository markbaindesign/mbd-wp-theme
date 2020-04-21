<?php

/**
 * Gallery (OBSOLETE?)
 */

if (!function_exists('baindesign324_image_gallery')) :
   function baindesign324_image_gallery()
   {
      // Vars
      $images = get_sub_field('image_gallery_content');
      $count = count($images);
      if ($images) :
         $content = '<div class="gallery gallery--images-' . $count . '">';
         foreach ($images as $image) :
            $content.= baindesign324_image_gallery_images($image);
         endforeach;
         $content.='</div>';
      endif;
      return $content;
   }
endif;

/**
 * Gallery Images
 */
if (!function_exists('baindesign324_image_gallery_images')) :
   function baindesign324_image_gallery_images($image)
   {
      // Vars
      $caption       = $image['caption'];
      $size          = $image['sizes']['large'];
      $alt           = $image['alt'];
      $title         = $image['title'];
      $link          = $image['url'];

      $content ='<figure class="gallery__fig">';
      $content.='<a href="'.$link.'">';
      $content.='<img class="gallery__image" src="'.$size.'" alt="'.$alt.'" title="'.$title.'" />';
      $content.='</a>';
      if ($caption) {
         $content.='<figcaption class="gallery__figcap">' . $caption . '</figcaption>';
      }
      $content.='</figure>';
      return $content;
   }
endif;