<?php get_header();?>
<?php // get_template_part('content', 'banner');?>
	<div class="section">
		<div class="container">
			<div class="post-list">
				<h1 class="h2">
					<?php _e("Category Archive:", '_baindesign'); ?>
					<?php echo single_cat_title( '', false ); ?>
				</h1>
			</div><!-- .post-list -->
		</div><!-- .container -->
	</div><!-- .section -->
<?php if ( have_posts() ) : ?> 
	<div class="section non-featured-posts">
		<div class="container">
			<div class="media-object-container masonrycontainer">
				<div class="grid-sizer"></div>
				<div class="gutter-sizer"></div>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'archive' ); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div><!-- .container -->
	</div><!-- .section -->
<?php endif; ?>		
<?php if ( 'baindesign324_paging_nav' ) {
	baindesign324_paging_nav();
} ?>
<?php get_footer();?>