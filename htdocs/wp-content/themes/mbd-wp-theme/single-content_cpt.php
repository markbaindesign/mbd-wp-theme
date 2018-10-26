<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content-intro' ); ?>	
	<div id="main" class="section">
		<div class="container">
			<div id="primary" class="section content-area">
				<div class="content-container">
					<?php get_template_part( 'content', 'content_cpt' ); ?>
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

<?php endwhile; ?>
<?php get_footer(); ?>