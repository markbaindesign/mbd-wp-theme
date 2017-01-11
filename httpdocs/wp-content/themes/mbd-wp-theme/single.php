<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', 'cover' ); ?>
	<div id="main" class="section">
		<div class="container">
			<div id="primary" class="section content-area">
				<div class="content-container">
					<?php get_template_part( 'content' ); ?>
								<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>
				</div>
			</div><!-- #primary -->
		
			<?php get_sidebar(); ?>
	</div><!-- .container -->
	</div><!-- #main -->

<?php endwhile; // end of the loop. ?>

<?php if ( function_exists( 'mbdmaster_related_posts' ) ) : ?>
	<div class="section post-navigation">
		<div class="container media-object-container">
			<h3><?php _e( 'Related posts', '_mbdmaster' ); ?></h3>	
			<?php mbdmaster_related_posts(); ?>	
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>