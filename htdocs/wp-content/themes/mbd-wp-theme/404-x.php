<?php get_header(); ?>
<?php get_template_part( 'content', 'cover' ); ?>
	<div id="main" class="section">
		<div class="container">
			<div class="primary-content-block">
				<?php get_sidebar(); ?>
			</div>
			<div class="secondary-content-block">
				<h1 class="h2">
					<?php _e("Not found", '_mbdmaster'); ?>
				</h1>
				<?php get_template_part( 'content', 'none' ); ?>
			</div>	
		</div><!-- .container -->
	</div><!-- #main -->
<?php get_footer(); ?>