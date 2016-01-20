<?php get_header(); ?>
<?php get_template_part( 'content', 'cover-latest' ); ?>
<div class="section">
	<div class="container">
		<div class="post-list">
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

			if ( $query->have_posts() ) : ?> 
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php get_template_part( 'content', 'archive' ); ?>
				<?php endwhile; // end of the loop. ?>
			<?php endif; ?>
			</div><!-- .post-list -->
	</div><!-- .container -->
</div><!-- .section -->

<?php _mbbasetheme_paging_nav(); ?>

<div class="section post-navigation">
	<div class="container">
		<?php _e('<h3>Recent Case Studies</h3>', 'mbdmaster'); ?>
		<?php get_template_part( 'content', 'post-list' ); ?>
		<a class="readmore" href="<?php echo get_bloginfo( 'url' ); ?>/case_studies/"><?php _e( 'See all Case Studies', 'mbdmaster' ); ?></a>

	</div><!-- .container -->
</div><!-- .section -->
<?php get_footer(); ?>