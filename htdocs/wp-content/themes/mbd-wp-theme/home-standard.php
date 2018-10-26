<?php get_header(); ?>
<?php get_template_part( 'content', 'cover-latest' ); ?>
	<div class="section">
		<div class="container">
			
			<?php
				// WP_Query arguments
				$args = array (
					'post_type' => 'page',
					'p' => '1512' // This is the ID of the English Think page.
					// This will also work on the translated page.
					// This will NOT work if home is a different ID.
				);
				// The Query
				$query1 = new WP_Query( $args );

				// The Loop
				while ( $query1->have_posts() ) {
					$query1->the_post();
					echo '<h1 class="h2">';
					echo the_title();
					echo '</h1>';
					echo the_content();
				}

				/* Restore original Post Data 
				 * NB: Because we are using new WP_Query we aren't stomping on the 
				 * original $wp_query and it does not need to be reset with 
				 * wp_reset_query(). We just need to set the post data back up with
				 * wp_reset_postdata().
				 */
				wp_reset_postdata();
			?>
			<div class="post-list">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'archive' ); ?>
				<?php endwhile; endif // end of the loop. ?>
				</div><!-- .post-list -->
		</div><!-- .container -->
	</div><!-- .section -->
	<?php _mbbasetheme_paging_nav(); ?>
<?php get_footer(); ?>