<?php 

	get_header();
	do_action( 'baindesign324_blog_archive' ); 

?>
<div id="post-header" class="section">
	<div class="container">
		<h1 class="page-title">
			<?php
				$title = '';
				if ( get_field( 'post_archive_title', 'option' ) ) {
					$title = get_field( 'post_archive_title', 'option' );
				}
				echo $title;
			?>
		</h1>

		<?php
			$intro = '';
			if ( get_field( 'post_archive_intro', 'option' ) ) {
				$intro = get_field( 'post_archive_intro', 'option' );
			}
		   	if ( $intro ) {
		    	echo '<div class="intro">' . $intro . '</div>';
		    }
		?>
	</div><!-- .container -->
</div><!-- #intro .section -->	

<?php if ( have_posts() ) : ?>	
	<div id="posts-layout" class="section posts">
		<div class="container posts__container">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php baindesign324_template_content_archive(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .container -->
	</div><!-- .section -->
<?php endif; ?>

<?php get_footer(); ?>