<?php 
	$post_date = get_the_date();
	$post_title = get_the_title();
	$post_link = get_the_permalink();

	// return the URL to the post image
	$thumb_id = get_post_thumbnail_id();
	$size = '';
	$link = '';
	$image_url_array = wp_get_attachment_image_src( $thumb_id, 'golden', FALSE ); 
	$media_object_media_content = '';

	if ( has_post_thumbnail() ) {
		$image_url = $image_url_array[0];
	}
	
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'media-object' ); ?>>

		<div class="entry-title">
			<h3><a href="<?php echo $post_link ?>"><span><?php echo $post_title ?></span></a></h3>
		</div>
		<?php if ( is_home() ) {
			
			echo '<div class="post-meta"><span>' . $post_date . '</span></div>';
		} ?>
	</header>
<?php
					// Only show the media if it exists 
					if ( has_post_thumbnail() ) {
						$media_object_media_content = '<div class="media-object-media match-height">';
						$media_object_media_content .= '<a href="' . $post_link . '">';						
						$media_object_media_content .=	'<img src="' . $image_url . '" class="mobile-image">';
						$media_object_media_content .= '</a></div><!-- .media-object-media -->';
						$media_object_media_content .= '<article class="media-object-content match-height">';						
					} else {
						$media_object_media_content .= '<article class="media-object-content" style="width: 100%;">';
					}
					echo $media_object_media_content;
				?>
					
					<?php the_excerpt(); ?>			
					<footer class="read-more">
						<a href="<?php echo $post_link ?>" title="<?php _e( 'Go to', '_mbdmaster' ); ?> <?php echo $post_title ?>">
							<span class=""><?php _e( 'Read more', '_mbdmaster' ); ?> </span><i class="fa"></i>
						</a>
					</footer>
				</article><!-- .media-object-content -->
</div><!-- .media-object -->