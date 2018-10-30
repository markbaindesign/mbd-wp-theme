<?php 
	get_header(); 
	get_template_part( 'content', 'cover' ); 
?>

<div id="work-categories" class="section">
	<div class="container">
		<?php // baindesign324_cpt_archive_link( 'work'); ?>
					<?php wp_nav_menu( array( 
						'theme_location' => 'work', 
						'menu_class' => 'menu all-tax-terms ',
						'fallback_cb' => false
					) ); 
				?>	
		<?php // baindesign324_show_all_terms( 'type' ); ?>
	</div><!-- .container -->
</div><!-- .section -->

<div class="section">
		<div class="container">
			<?php

				echo '<h1 class="h2">';
				$term = get_term_by( 'slug', 
					get_query_var( 'term' ), 
					get_query_var( 'taxonomy' ) );
				echo $term->name; // will show the name of the term
				echo '</h1>';
				if ( $term->description ) {
					echo '<p>' . $term->description . '</p>'; 
				}
			?>
		</div><!-- .container -->
	</div><!-- .section -->

<div id="featured-post" class="section">
	<div class="container media-object-container full-width">
		<?php get_template_part( 'content-latest-post-work-type' ); ?>
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
		'post_type' => 'work',
		'tax_query' => array(
			array(
				'taxonomy' => 'type',
				'field'    => 'slug',
				'terms'    => $term,
			),
		),
		'my_special_cpt_query' => true	
	);
	$query = new WP_Query($args);

   	?>
<?php if ( $query->have_posts() ) : ?> 
	<div class="section non-featured-posts">
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
<?php endif; ?>	
<?php if ( 'baindesign324_paging_nav' ) {
	baindesign324_paging_nav();
} ?>	

<?php get_footer(); ?>