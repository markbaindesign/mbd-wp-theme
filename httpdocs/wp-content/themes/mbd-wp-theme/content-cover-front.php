<?php
	// A different cover image is needed for each page type
	

	// Post type archive pages
	  if ( is_post_type_archive() ) { 
	    if ( is_post_type_archive( 'work' ) && get_theme_mod( 'mbdmaster_work_archive_image', '' ) ) {
	      $image_url = get_theme_mod( 'mbdmaster_work_archive_image', '' );
	    } else {
	      $image_url = get_theme_mod( 'mbdmaster_default_archive_image', '' );
	    }

	// Taxonomy archive pages
	} elseif ( is_tax() ) { 
		if ( z_taxonomy_image_url( ) ) {
			$image_url = z_taxonomy_image_url( );
		}

	// Blog Home page	
	} elseif ( is_home() || is_front_page() ) {
		if ( is_home() ) {
			$context = 'page_for_posts';
		} else {
			$context = 'page_on_front';
		}

		// Determine context
			

			$page_id = ( 'page' == get_option( 'show_on_front' ) ? get_option( $context ) : get_the_ID );
				// WP_Query arguments
				$args = array (
					'post_type' => 'page',
					'p' => $page_id
				);
				// The Query
				$query1 = new WP_Query( $args );

				// The Loop
				while ( $query1->have_posts() ) {
					$query1->the_post();
					$thumb_id = get_post_thumbnail_id();
					$size = '';
					$image_url_array = wp_get_attachment_image_src( $thumb_id, $size, FALSE ); 
					$image_url = $image_url_array[0];
					$default_image_url = get_stylesheet_directory_uri() . '/assets/images/default-golden.jpg';
				}

				/* Restore original Post Data 
				 * NB: Because we are using new WP_Query we aren't stomping on the 
				 * original $wp_query and it does not need to be reset with 
				 * wp_reset_query(). We just need to set the post data back up with
				 * wp_reset_postdata().
				 */
				wp_reset_postdata();

	} else { // Post & pages
	    $thumb_id = get_post_thumbnail_id();
		$size = '';
		$image_url_array = wp_get_attachment_image_src( $thumb_id, $size, FALSE ); 
	    $image_url = $image_url_array[0];
	  }

	// Inline styles
	$inline_style = 'background-image: url(' . $image_url . ');';  
	$inline_style .= 'background-position: 0% 100%; '; 
	$inline_style .= 'background-repeat: no-repeat;';

	// Background image visibility controlled in CSS via "background-size" 

 ?>
<div class="cover section">
	<div class="container media-object-container full-width" >
		<div class="media-object">
			<div class="media-object-media match-height" style="<?php echo $inline_style; ?>">
				<?php if ( !empty( $image_url ) ) : ?>
							<img src="<?php echo $image_url; ?>" class="mobile-image">
						<?php endif; ?>
			</div><!-- .media-object-media -->
			<article class="media-object-content ">
				<div class="match-height"><?php // This div is here so we can vertically center this content! ?>
					<?php the_field( 'hero_section_content' ); ?>
				</div>
			</article><!-- .media-object-content -->
		</div><!-- .media-object -->
		
	</div>
</div><!-- .section -->