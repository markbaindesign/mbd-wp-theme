<?php get_header();?>
<?php get_template_part('content', 'banner');?>
	<div class="section">
		<div class="container">
			<div class="post-list">
			<h1 class="h2">
				<?php _e("Tag Archive:", '_baindesign'); ?>
				<?php echo single_tag_title( '', false ); ?>
			</h1>
				<?php while (have_posts()):the_post();?>
					<?php get_template_part('content', 'archive');?>
				<?php endwhile; // end of the loop. ?>
			</div><!-- .post-list -->
		</div><!-- .container -->
	</div><!-- .section -->
	<?php _mbbasetheme_paging_nav();?>
<?php get_footer();?>