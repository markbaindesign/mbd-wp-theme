<?php 
	
	// return the URL to the post image
	$thumb_id = get_post_thumbnail_id();
	$size = '';
	$image_url_array = wp_get_attachment_image_src( $thumb_id, 'golden', FALSE ); 
	$media_object_media_content = '';

	if ( has_post_thumbnail() ) {
		$image_url = $image_url_array[0];
	}
	
?>
<div class="media-object ">
<?php
					// Only show the media if it exists 
					if ( has_post_thumbnail() ) {
						$media_object_media_content = '<div class="media-object-media match-height">';
						$media_object_media_content .= '<a href="' . $link . '">';						
						$media_object_media_content .=	'<img src="' . $image_url . '" class="mobile-image">';
						$media_object_media_content .= '</a></div><!-- .media-object-media -->';
						$media_object_media_content .= '<article class="media-object-content match-height">';						
					} else {
						$media_object_media_content .= '<article class="media-object-content" style="width: 100%;">';
					}
					echo $media_object_media_content;
				?>
					<header>
						<div class="entry-title">
							<h3><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a></h3>
						</div>
						<div class="post-meta"><span><?php echo get_the_date(); ?></span></div>
					</header>
					<?php the_excerpt(); ?>			
					<footer class="read-more">
						<a href="<?php the_permalink(); ?>" title="<?php _e( 'Go to', '_mbdmaster' ); ?> <?php the_title(); ?>"><span class="visuallyhidden"><?php _e( 'Read more', '_mbdmaster' ); ?></span><i class="fa"></i></a>
					</footer>
				</article><!-- .media-object-content -->
</div><!-- .media-object -->