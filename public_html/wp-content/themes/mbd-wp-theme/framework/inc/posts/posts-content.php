<?php

/**
 * Content default
 */

if (!function_exists('baindesign324_content')) :
   function baindesign324_content()
   {
      echo '<div class="post__content">';
      do_action('baindesign324_content_before');
      
      // Next check posts/page flex content
      if(have_rows('posts_page_flexible_content_sections')):
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
      // Vars
      $url = bd324_get_the_post_image_url();
      if ($url){
         $content ='<figure><img src="' . $url . '" class="post__image"></figure>';
      }
      return $content;
   }
endif;

/**
 * Get the post image
 * 
 */
if (!function_exists('bd324_get_the_post_image_url')) :
   function bd324_get_the_post_image_url()
   {
      // Vars
      $cover = get_field('cover_image');
      $media_array = get_sub_field('media_block_image');
      $media = $media_array["url"];

      if ($cover) {
         $url = $cover["url"];
      } elseif ($media) {
         $url = $media;
      }
      return $url;
   }
endif;

/**
 * Show Post aside
 * 
 * Display a post aside
 * 
 **/
if (!function_exists('bd324_show_article_aside')) :
   function bd324_show_article_aside()
   {
      echo '<aside class="post__image">';
      echo bd324_get_cover_image();
      echo '</aside>';
   }
endif;

/**
 * Show Post header
 * 
 * Display a post header
 * Apart from the post title, this may also contain
 * the author, the date, post categories and other 
 * post meta data.
 **/
if (!function_exists('bd324_show_article_header')) :
   function bd324_show_article_header()
   {
      echo '<header class="post__header">';
      echo baindesign324_post_title();
      echo baindesign324_post_author();
      echo bd324_get_post_date();
      echo '</header>';
   }
endif;

if (!function_exists('baindesign324_template_content_archive')) :
   function baindesign324_template_content_archive()
   {
      // Vars
$id =                   get_the_ID();
$post_type =            get_post_type();
$post_link =            get_the_permalink();

/**
 * Custom display title
 * Team members title should use custom fields
 * rather than standard title
 */
$post_display_title =   bd324_get_the_title($id);
// var_dump($post_display_title);

$post_title =           get_the_title($id);

// Meta
$post_meta =            bd324_get_the_meta($id);
$post_excerpt =         get_the_excerpt();

// Image
$thumb_id =             get_post_thumbnail_id();
$image_url_array =      wp_get_attachment_image_src($thumb_id, 'tsft-square', FALSE);
$image_url =            '';

// Get the thumbnail
if (get_field('book_image')) {
   $image_url_array = get_field('book_image');
   $image_url = $image_url_array['url'];
} elseif (has_post_thumbnail()) {
   $image_url = $image_url_array[0];
}
?>

<article class="post post--post-block">

   <?php // Post image
   if ($image_url) :
   ?>
      <div class="post__image post__image--post-block">
         <a href="<?php echo $post_link ?>" title="<?php echo $post_title; ?>">
            <img src="<?php echo $image_url ?>" class="mobile-image" alt=''>
         </a>
      </div>
   <?php endif; ?>

   <?php // Post title 
   ?>
   <h2 class="post__title post__title--post-block">
      <a class="post__link" href="<?php echo $post_link; ?>" title="<?php echo esc_html($post_title); ?>"><?php echo $post_title; ?></a>
   </h2>

   <?php // Post meta
   if ($post_meta) : ?>
      <div class="post__meta post__meta--post-block">
         <span><?php echo $post_meta; ?></span>
      </div>
   <?php endif; ?>

   <?php // Post excerpt
   if ($post_excerpt) :
   ?>
      <div class="post__excerpt post__excerpt--post-block"><?php echo $post_excerpt; ?></div>
   <?php endif; ?>

   <?php // Post footer 
   ?>
   <footer class="post__more post__more--post-block">
      <a class="post__link" href="<?php echo $post_link ?>" title="<?php _e('Read more about ', '_baindesign'); ?> <?php echo esc_html($post_title); ?>">
         <span class=""><?php _e('Read more', '_baindesign'); ?> </span><i class="fa"></i>
      </a>
   </footer>

</article>
<?php 
   }
endif;