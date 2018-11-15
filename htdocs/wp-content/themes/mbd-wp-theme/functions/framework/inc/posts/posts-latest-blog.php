<?php

if ( ! function_exists( 'baindesign324_latest_blog_posts' ) ) :
	function baindesign324_latest_blog_posts() { ?>
		<?php
			global $latest_blog_posts_module_more;
			global $latest_blog_posts_module_title;
			global $latest_blog_posts_module_sub_title;
		?>
		<div class="section latest-posts">
			<div id="intro-latest-posts" class="container intro">
				<header>
					<h2 class="home-section-title"><?php _e( $latest_blog_posts_module_title, '_baindesign' ); ?></h2>
					<!-- <p><?php _e( $latest_blog_posts_module_sub_title, '_baindesign' ); ?></p>-->
				</header>
			</div>
		</div>

		<div class="posts posts-latest">
			<div class="container posts__container">
				<?php baindesign324_latest_posts(); ?>
			</div><!-- .container -->
		</div><!-- .section -->
			
				<footer class="read-more">
					<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="<?php _e( 'See more posts', '_baindesign' ); ?>" >
						<span class=""><?php _e( $latest_blog_posts_module_more, '_baindesign' ); ?></span>
						<i class="fa"></i>
					</a>
				</footer>
			</div><!-- .container -->
		</div><!-- .section --> 
	<?php }
endif;