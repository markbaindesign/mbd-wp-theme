<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content-intro' ); ?>	
	<div id="main" class="section section_page">
		<div class="container">
			<?php get_template_part( 'content', 'introduced' ); ?>
		</div><!-- .container -->
	</div><!-- #main -->
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>