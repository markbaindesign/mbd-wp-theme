<?php

if ( ! function_exists( 'baindesign324_testimonial_meta' ) ) :
	function baindesign324_testimonial_meta() {
		$post_id = get_the_ID();
		
		// Image
		$thumb_id = get_post_thumbnail_id();
		$reviewer_image = get_the_post_thumbnail( $post_id,'square' );
		$image_url = wp_get_attachment_image_src( $thumb_id,'thumbnail', true);

		// Meta
		$testimonial_content_excerpt = get_post_meta($post_id, 'testimonial_content_excerpt', true);
		$reviewer_name = get_post_meta($post_id, 'testimonial_name', true);
		$reviewer_link = get_post_meta($post_id, 'testimonial_link', true);
		$reviewer_description = get_field('testimonial_role',$post_id);
		$featured = get_post_meta($post_id, 'featured_testimonial', true);

		$reviewer_image_content = '';
		if ( $reviewer_image ) {
			$reviewer_image_content .= '<span class="reviewer_image">';
			$reviewer_image_content .= $reviewer_image;
			$reviewer_image_content .= '</span><!-- .reviewer_image -->';
		}

		$reviewer_name_content = '';
		if ( $reviewer_name ) {

			if ( $reviewer_link ) {
				$reviewer_name_content .= '<a class="reviewer_link" href="';
				$reviewer_name_content .= $reviewer_link;
				$reviewer_name_content .= '">';
			}

			$reviewer_name_content .= '<cite class="reviewer_name">';
			$reviewer_name_content .= $reviewer_name;
			$reviewer_name_content .= '</cite><!-- .reviewer_name -->';

			if ( $reviewer_link ) {
				$reviewer_name_content .= '</a><!-- .reviewer_link -->';
			}
		}

		if ( $reviewer_description ) { 
			$reviewer_description_content = '<span class="review_description">';
			$reviewer_description_content .= $reviewer_description;
			$reviewer_description_content .= '</span><!-- .review-description -->';
		}

		$content = $reviewer_image_content . $reviewer_name_content . $reviewer_description_content;
		?>
			<div class="testimonial-meta">
				<?php echo $content; ?>	
			</div><!-- .testimonial-meta -->

		<?php
	}
endif;