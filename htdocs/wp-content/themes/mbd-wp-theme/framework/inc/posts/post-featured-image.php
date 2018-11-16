<?php

if ( ! function_exists( 'baindesign324_featured_image' ) ) :
	function baindesign324_featured_image( $size ) {
		$post_id = get_the_ID();
		
		// Image
		$thumb_id = get_post_thumbnail_id();
		$featured_image = get_the_post_thumbnail( $post_id, $size );
		$image_url = wp_get_attachment_image_src( $thumb_id, $size, true);

		$featured_image_content = '';
		if ( $featured_image ) {
			$featured_image_content .= $featured_image;
		}

		$content = $featured_image_content;
		?>
			<div class="featured-image">
				<?php echo $content; ?>	
			</div><!-- .featured-image -->

		<?php
	}
endif;