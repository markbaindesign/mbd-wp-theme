<?php

/**
 * baindesign324_featured_cpt
 */

if ( ! function_exists( 'baindesign324_featured_cpt' ) ) :
	function baindesign324_featured_cpt( $post_type, $posts_per_page ) {

		// Post date
		$post_date = baindesign324_custom_post_date(); // This is untested. 

		$my_query = new WP_Query( array (
			'post_status' => 'publish',
			'posts_per_page' => $posts_per_page,
			'post_type' => $post_type,
			
			// Post order
			'meta_key'   	=> $post_date,
			'orderby'    	=> 'meta_value_num',
			'order'			=> 'DESC',


			'meta_query'	=> array(
				array(
				    'key' => $post_type . '_featured',
				    'compare' => '==',
				    'value'   => '1',
				),
			),
		) );
		if( $my_query->have_posts() ) :

			$section_title =  get_sub_field( 'section_title' );
			$section_intro =  get_sub_field( 'section_intro' );
			$section_more_link_title = get_sub_field( 'section_more_link_title' );
			$section_more_link_url =  get_sub_field( 'section_more_link_url' );

		?>
			<div id="<?php echo $post_type ?>-featured" class="section section-featured">

				<?php if ( $section_title ) : ?>
					<header class="container section-header intro">
						<h2 class="home-section-title"><?php echo $section_title; ?></h2>
						<?php if ( $section_intro ) : ?>
							<div class="section_intro"><?php echo $section_intro; ?></div>	
						<?php endif; ?>
					</header>
				<?php endif; ?>	

				<div class="container media-object-container featured-<?php echo $posts_per_page; ?>">
					<?php while( $my_query->have_posts()) : $my_query->the_post();
						baindesign324_template_content_archive();
					endwhile; ?>
				</div><!-- .container -->

				<?php if ( $section_more_link_url ) : ?>
					<footer class="read-more container">
						<a href="<?php echo $section_more_link_url; ?>" title="<?php _e( 'Learn more', '_baindesign' ); ?>" >
						<span class=""><?php echo $section_more_link_title; ?></span> <i class="fa"></i>
						</a>
					</footer><!-- .container -->
				<?php endif; ?>	

			</div><!-- .section -->
		<?php endif;
		wp_reset_query(); 
	}
endif;