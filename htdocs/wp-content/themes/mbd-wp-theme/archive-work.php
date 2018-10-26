<?php 
	get_header(); 
	get_template_part( 'content', 'cover' ); 
?>
<div id="intro" class="section">
	<div class="container">
		<h1 class="h2">
			<?php  
				if ( get_theme_mod( 'mbdmaster_work_archive_title', '' ) ) {
		      		echo get_theme_mod( 'mbdmaster_work_archive_title', '' );
			    } else {
			    	echo post_type_archive_title();
			    }
			?>			
		</h1>
		<p>
			<?php  
				if ( get_theme_mod( 'mbdmaster_work_archive_content', '' ) ) {
		      		echo get_theme_mod( 'mbdmaster_work_archive_content', '' );
			    }
			?>		
		</p>
	</div><!-- .container -->
</div><!-- .section -->

<div id="featured-post" class="section">
	<div class="container media-object-container full-width">
		<?php get_template_part( 'content-latest-post-work' ); ?>
	</div><!-- .container -->
</div><!-- .section -->

<div id="work-categories" class="section">
	<div class="container">
		<?php mbdmaster_show_all_terms( 'type' ); ?>
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
		'posts_per_page' => 6,
		'my_special_cpt_query' => true	
	);
	$query = new WP_Query($args);
?>
<?php if ( $query->have_posts() ) : ?> 
	<div class="section">
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

	<?php if ( 'mbdmaster_paging_nav' ) {
		mbdmaster_paging_nav();
	} ?>	
	
<?php endif; ?>
<?php get_footer(); ?>