<?php 

	get_header();
	do_action( 'baindesign324_blog_archive' ); 

?>


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
	
	<div id="posts-grid-layout" class="section">
		<div class="container media-object-container">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php baindesign324_template_content_archive(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .container -->
	</div><!-- .section -->
	
	<?php if ( function_exists( 'baindesign324_paging_nav' ) ) {
		baindesign324_paging_nav();
	} ?>	

<?php endif; ?>
<?php get_footer(); ?>