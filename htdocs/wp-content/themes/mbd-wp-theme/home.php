<?php 
	/* home-latest-post.php */
	/* Display highlighted latest post and offset others */
	/* Requires... */
	/* Rename to home.php */
	get_header(); 
?>
<?php get_template_part( 'content', 'cover' ); ?>
<div id="intro" class="section">
		<div class="container">
			<?php
				// Determine context
				$page_id = ( 'page' == get_option( 'show_on_front' ) ? get_option( 'page_for_posts' ) : get_the_ID );
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
	</div><!-- .container -->
</div><!-- .section -->

<div id="featured-post" class="section">
	<div class="container media-object-container full-width">
		<?php get_template_part( 'content-latest-post' ); ?>
	</div><!-- .container -->
</div><!-- .section -->

<?php
	/*
	 * Remove first post from loop/pagination
	 * Note: some custom functions are required! 
	 * [See theme-helpers.php]
	 */
	$args = array(
		'offset' => 1,
		'paged' => $paged,
		'my_special_query' => true	
	);
	$query = new WP_Query($args);
?>
<?php if ( $query->have_posts() ) : ?> 
	
	<div id="posts-grid-layout" class="section non-featured-posts">
		<div class="container">
			<div class="media-object-container masonrycontainer">
				<div class="grid-sizer"></div>
				<div class="gutter-sizer"></div>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php get_template_part( 'content', 'archive' ); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div><!-- .container -->
	</div><!-- .section -->
	
	<?php if ( function_exists( 'mbdmaster_paging_nav' ) ) {
		mbdmaster_paging_nav();
	} ?>	

<?php endif; ?>
<?php get_footer(); ?>