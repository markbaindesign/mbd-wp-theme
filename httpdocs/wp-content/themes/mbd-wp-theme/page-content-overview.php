<?php get_header(); ?>
<?php 
	while ( have_posts() ) : the_post(); 
	$page_content = get_the_content();
?>
<div id="intro" class="section">
	<div class="container">
		<h1 class="h2 page-title text-block">
			<?php the_title(); ?>
		</h1>
		<?php 
			if ( $page_content ) {
				echo '<div class="intro text-block">' . $page_content . '</div>';
			}
		?>
	</div><!-- .container -->
</div><!-- #intro .section -->

<div id="main" class="section grid-cols-two">
	<div class="container">
		<!-- Overview -->
		<?php if ( 
			get_template_part( 'modules/module-overview') ) { 
				get_template_part( 'modules/module-overview' );
			}
		?>
	</div><!-- .container -->
</div><!-- #main -->
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>