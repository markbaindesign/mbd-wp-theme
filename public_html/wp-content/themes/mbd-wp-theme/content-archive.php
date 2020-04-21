<?php

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
$image_url =            bd324_get_thumbnail_uri( $id, 'tsft-square' );

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