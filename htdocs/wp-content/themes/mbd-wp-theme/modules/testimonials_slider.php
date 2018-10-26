<div id="testimonials-front" class="section">
	<div id="testimonials-slider" class="container">
		<header class="section-header">
			<h2 class="home-section-title"><?php _e( 'What people are saying', '_mbdmaster' ); ?></h2>
		</header>
		
		<div id="twitter-avatar" class="section-icon">
			<?php 
				$twitter_url = get_theme_mod( 'mbdmaster_social_media_profile_twitter' ); 
			?>

				<span class="fa-stack fa-2x">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-quote-left fa-stack-1x fa-inverse"></i>
				</span>

		</div> 
		<div id="testimonials-slider">
			<ul class="slides">
				<?php 

					/**
					 *
					 *	Display "featured" testimonial posts
					 *
					 */
				
					$my_query = new WP_Query( array (
						'post_status' => 'publish',
  						'posts_per_page' => -1,
						'post_type' => 'testimonial',
						'orderby' => 'rand',
						'meta_query'	=> array(
							array(
								'key'	  	=> 'featured_testimonial',
								'value'	  	=> '1',
								'compare' 	=> 'LIKE'
							)	
						)
					) );


					if( $my_query->have_posts() ) : while( $my_query->have_posts()) : $my_query->the_post();
				
					// Vars
					$thumb_id = get_post_thumbnail_id();
					$reviewer_image = get_the_post_thumbnail( $post->ID,'testimonial-image', true );
					$image_url = wp_get_attachment_image_src( $thumb_id,'thumbnail', true);
					$testimonial_content_excerpt = get_post_meta($post->ID, 'testimonial_content_excerpt', true);
					$reviewer_name = get_post_meta($post->ID, 'testimonial_name', true);
					$reviewer_link = get_post_meta($post->ID, 'testimonial_link', true);
					$reviewer_description = get_post_meta($post->ID, 'testimonial_role', true);
					$featured = get_post_meta($post->ID, 'featured_testimonial', true);

				?>
						<li class="slide media_block" data-thumb="<?php echo $image_url[0]; ?>">


						<?php 
							/**
							 *
							 *	Find connected items and display the title
							 *
							 */

							p2p_type( 'testimonials_to_books' )->each_connected( $my_query, array(), 'connected_book' );
							p2p_type( 'testimonials_to_films' )->each_connected( $my_query, array(), 'connected_film' );
							p2p_type( 'testimonials_to_projects' )->each_connected( $my_query, array(), 'connected_project' );
							p2p_type( 'testimonials_to_talks' )->each_connected( $my_query, array(), 'connected_talk' );
							p2p_type( 'testimonials_to_workshops' )->each_connected( $my_query, array(), 'connected_workshop' );
							p2p_type( 'testimonials_to_awards' )->each_connected( $my_query, array(), 'connected_award' );
							
							foreach ( $post->connected_book as $post ) : setup_postdata( $post ); 
								$connected_title = get_the_title();
							endforeach; 
							foreach ( $post->connected_film as $post ) : setup_postdata( $post ); 
								$connected_title = get_the_title();
							endforeach; 
							foreach ( $post->connected_project as $post ) : setup_postdata( $post );
								$connected_title = get_the_title();
							endforeach;
							foreach ( $post->connected_talk as $post ) : setup_postdata( $post );
								$connected_title = get_the_title();
							endforeach;
							foreach ( $post->connected_workshop as $post ) : setup_postdata( $post );
								$connected_title = get_the_title();
							endforeach;
							foreach ( $post->connected_award as $post ) : setup_postdata( $post );
								$connected_title = get_the_title();
							endforeach;

						?>
							


							<div id="slide-content" class="media_block-text">
								<header>About <span><a href="<?php the_permalink(); ?>"><?php echo $connected_title; ?></a></span></header>
								<article>
									<blockquote>
										<p><?php echo $testimonial_content_excerpt; ?></p>
									</blockquote>
									<div class="media_block-image">
									
											
											
										<?php

											if ( $reviewer_image ) {
												$reviewer_image_content = '<span class="reviewer_image">';
												$reviewer_image_content = $reviewer_image;
												$reviewer_image_content = '</span><!-- .reviewer_image -->';
											}

											if ( $reviewer_name ) {
											
												$reviewer_name_content = '';

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
												$reviewer_description_content = ', <span class="review_description">';
												$reviewer_description_content .= $reviewer_description;
												$reviewer_description_content .= '</span><!-- .review-description -->';
											}

											print $reviewer_name_content;

										?>

									</div><!-- #slide-content -->




								
							</div>
						 </li><!-- slide media_block -->
								<?php wp_reset_postdata(); ?>			<?php endwhile; ?>

				<?php endif; ?>
			        </ul>
		</div>
	</div><!-- .container -->
</div><!-- .section -->