<?php

if ( ! function_exists( 'baindesign324_latest_blog_posts' ) ) :
	function baindesign324_latest_blog_posts() { ?>
			<header>
				<h2 class="home-section-title"><?php _e( 'Latest posts', '_baindesign' ); ?></h2>
				<p><?php _e( 'Check out my recent writing.', '_baindesign' ); ?></p>
			</header>
			<div class="posts__container">
				<?php baindesign324_latest_posts(); ?>
			</div><!-- .container -->
			<footer class="readmore__section">
				<div class="readmore__container">
					<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="<?php _e( 'See more posts', '_baindesign' ); ?>" >
						<span class=""><?php _e( 'See more posts', '_baindesign' ); ?></span>
					</a>
				</div>
			</footer>
	<?php }
endif;