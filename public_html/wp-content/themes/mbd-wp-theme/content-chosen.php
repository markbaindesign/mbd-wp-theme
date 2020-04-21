<?php

// Vars
$id =                   get_the_ID();
$post_type =            get_post_type();
$post_link =            get_the_permalink();
$post_display_title =   bd324_get_the_title($id);
$post_title =           get_the_title();

// Meta
$post_meta =            bd324_get_the_meta($id);
$post_excerpt =         get_the_excerpt();

// Image
$cover_image = get_field( 'cover_image', $id );
if ( $cover_image ) {
   $image_url = $cover_image["url"];
} else {
   $image_url = bd324_get_thumbnail_uri( $id, 'latest_post' );
}


?>

<article class="post post--card">

   <?php // Post image
   if ($image_url) :
   ?>
      <div class="post__image">
         <a href="<?php echo $post_link ?>" title="<?php echo $post_title; ?>">
            <img src="<?php echo $image_url ?>" alt=''>
         </a>
      </div>
   <?php endif; ?>
   <div class="post__body">
      <?php // Post title 
      ?>
      <h2 class="post__title">
         <a class="post__link" href="<?php echo $post_link; ?>" title="<?php echo esc_html($post_title); ?>"><?php echo $post_display_title; ?></a>
      </h2>

      <?php // Post meta
      if ($post_meta) : ?>
         <div class="post__meta">
            <span><?php echo $post_meta; ?></span>
         </div>
      <?php endif; ?>

      <?php // Post excerpt
      if ($post_excerpt) :
      ?>
         <div class="post__excerpt"><?php echo $post_excerpt; ?></div>
      <?php endif; ?>

      <?php // Post footer 
      ?>
      <footer class="post__more">
         <a class="post__link" href="<?php echo $post_link ?>" title="<?php _e('Read more about ', '_baindesign'); ?> <?php echo esc_html($post_title); ?>">
            <span class=""><?php _e('Read more', '_baindesign'); ?> </span><i class="fa"></i>
         </a>
      </footer>
   </div>
</article>