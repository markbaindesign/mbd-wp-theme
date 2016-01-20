<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', 'cover' ); ?>

<div id="main" class="section">
	<div class="container">
		<?php get_template_part( 'content' ); ?>
	</div><!-- .container -->
</div><!-- #main -->
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>