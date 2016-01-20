<?php if ( function_exists ( 'mbdmaster_categories' ) ) : ?> 
	<div id="categories-front" class="section latest-posts">
		<div class="container media-object-container">
			<header>
				<h2 class="home-section-title">
					<?php _e( 'Work', '_mbdmaster' ); ?></h2>
			</header>

			<div class="media-object-container grid-layout">
				<?php 
					
					$terms = get_terms( 'type' );

					foreach ( $terms as $term ) : 
						$term_link = get_term_link( $term );
					    // If there was an error, continue to the next term.
					    if ( is_wp_error( $term_link ) ) {
					        continue;
					    }
				?>				
				<div class="media-object">
					<a href="<?php echo esc_url( $term_link ); ?>">
						<div class="media-object-media">
							<?php 	
								$saved_data = get_tax_meta($term->term_id,'mbd_thumb_image_field_id',true);
								$attachment_id = $saved_data['id'];
								echo wp_get_attachment_image( $attachment_id, 'full' ); 
							?>
											
						</div><!-- .media-object-media -->
						<article class="media-object-content">
							<header><span><?php echo $term->name; ?></span></header>
						</article><!-- .media-object-content -->
					</a>
				</div><!-- .media-object -->
				<?php endforeach; ?>

			</div><!-- .media-object-container -->		

		</div><!-- .container -->	
	</div><!-- .section --> 	
<?php endif; ?>