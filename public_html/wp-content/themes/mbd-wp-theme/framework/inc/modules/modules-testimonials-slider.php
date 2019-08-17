<?php

if ( ! function_exists( 'baindesign324_testimonials_slider' ) ) :
	function baindesign324_testimonials_slider() {
		$my_query = new WP_Query( array (
			'post_status' => 'publish',
			'posts_per_page' => 1,
			'post_type' => 'testimonial',
			'orderby' => 'rand',
			'meta_query' => array(
				array(
					'key' => 'featured_testimonial',
					'value' => '1',
					'compare' => 'LIKE'
				)	
			)
		));
		if( $my_query->have_posts() ) : ?>

		<div id="testimonials-front" class="section">
			<div id="testimonials-static" class="container container_narrow">
				<header class="section-header">
					<h2 class="home-section-title"><?php _e( 'What people are saying', '_baindesign' ); ?></h2>
				</header>
				
				<div class="section-icon">
					<span class="fa-stack fa-2x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-quote-left fa-stack-1x fa-inverse"></i>
					</span>
				</div>
				 
				<div id="testimonials">
					<ul class="slides">
						<?php while( $my_query->have_posts()) : $my_query->the_post();

							// Vars
							$thumb_id = get_post_thumbnail_id();
							$reviewer_image = get_the_post_thumbnail( $post->ID,'testimonial-image', true );
							$image_url = wp_get_attachment_image_src( $thumb_id,'thumbnail', true);
							$testimonial_content_excerpt = get_post_meta($post->ID, 'testimonial_content_excerpt', true);
							$name = get_field('testimonial_name');
							$link = get_field('testimonial_link');
							$role = get_field('testimonial_role');
							$featured = get_field('featured_testimonial');
						?>
							<li class="slide media_block" data-thumb="<?php echo $image_url[0]; ?>">
								<!-- START baindesign324_content_before -->			
								<?php do_action( 'baindesign324_content_before' ); ?>
								<!-- END baindesign324_content_before -->

								<?php the_content(); ?>
								
								<!-- START baindesign324_content_after -->
								<?php do_action( 'baindesign324_content_after' ); ?>
							 </li><!-- slide media_block -->		
							<?php endwhile; ?>
						</ul>
					</div>
				</div><!-- .container -->
			</div><!-- .section -->
		<?php wp_reset_postdata(); endif; ?>
	<?php } 
endif;