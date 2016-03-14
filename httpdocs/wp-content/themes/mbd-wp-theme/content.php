<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<h1 class="h1"><?php the_title(); ?></h1>
		<?php if ( function_exists ( 'mbdmaster_posted_on' ) && ( in_array( get_post_type(), array( 'post', 'work' ) ) ) && ( !has_term( 'book', 'type' ) ) ) {
			echo '<div class="post-meta">';
			echo get_avatar( get_the_author_meta( 'ID' ), 40 ); 
			mbdmaster_posted_on();
			echo '</div>';
		} ?>

		<div id="social-sharing">
			<?php if ( function_exists( 'mbdmaster_social_sharing' ) ) {
				mbdmaster_social_sharing(); 
			} ?>
		</div><!-- .section -->

		<?php 

			if ( 'book' == get_post_type() ) {
				/**
				 *
				 *	If it's a book, show purchase options
				 *
				 */
				
				get_template_part( 'content', 'purchase-options' );
				
			}




			the_content(); 

		?>

		

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_mbbasetheme' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->	
</article><!-- #post-## -->
<!-- Reviews -->

<?php
 
	$post_type = get_post_type();

	switch( $post_type ) {

	    case 'book':
	         $connected_type = 'testimonials_to_books';

	    break;

	    case 'workshop':
	         $connected_type = 'testimonials_to_workshops';

	    break;

	    case 'project':
	         $connected_type = 'testimonials_to_projects';

	    break;

	    case 'talk':
	         $connected_type = 'testimonials_to_talks';

	    break;

	    case 'award':
	         $connected_type = 'testimonials_to_awards';

	    break;

	    case 'film':
	         $connected_type = 'testimonials_to_films';

	    break;

	}
		
	$connected_testimonials = new WP_Query( array( // Find connected pages
		'connected_type' => $connected_type,
		'connected_items' => $post,
		'nopaging' => true,
		'post__not_in' => get_option("sticky_posts"),
	) );

if ( $connected_testimonials->have_posts() ) : 
?>
	<div class="reviews">
		<h2 class="h4 section-header">What people are saying about <em><?php the_title(); ?></em></h2>
			<?php while ( $connected_testimonials->have_posts() ) : $connected_testimonials->the_post();
				get_template_part( 'content-testimonial' );
			?>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

	</div> <!-- .reviews section -->
<?php endif; 

	if ( 'book' == get_post_type() ) {
		/**
		 *
		 *	If it's a book, show purchase options
		 *
		 */

		get_template_part( 'content', 'purchase-options' );

	}

?>



<div id="paging-navigation">
	<?php // mbdmaster_post_nav(); ?>
</div>