<?php get_header(); ?>
	<?php // get_template_part( 'content', 'cover' ); ?>
	<div id="main" class="section">
		<div class="container">
			<div id="primary" class="section content-area">
				<div class="content-container">
					<?php get_template_part( 'content', 'none' ); ?>
				</div>
			</div><!-- #primary -->
		
			<?php get_sidebar(); ?>
	</div><!-- .container -->
	</div><!-- #main -->
<?php get_footer(); ?>