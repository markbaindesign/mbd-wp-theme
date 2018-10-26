<?php
	global $latest_blog_posts_module_more;
	global $latest_blog_posts_module_title;
?>
<div class="section latest-posts">
	<div class="container media-object-container">
		<header>
			<h2 class="home-section-title"><?php _e( $latest_blog_posts_module_title, '_mbdmaster' ); ?></h2>
		</header>
		<div class="container-latest-posts">
			<?php mbdmaster_latest_posts(); ?>
		</div>
		<footer class="read-more">
			<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="<?php _e( 'See more posts', '_mbdmaster' ); ?>" >
				<span class=""><?php _e( $latest_blog_posts_module_more, '_mbdmaster' ); ?></span>
				<i class="fa"></i>
			</a>
		</footer>
	</div><!-- .container -->
</div><!-- .section --> 