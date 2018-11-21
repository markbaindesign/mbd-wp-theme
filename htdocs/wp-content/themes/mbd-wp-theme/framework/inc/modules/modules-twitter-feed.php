<?php

if ( ! function_exists( 'baindesign324_display_twitter_feed' ) ) :
	function baindesign324_display_twitter_feed() {
		// Hardcode the profile URL for now
		$twitter_url = 'https://twitter.com/mbain';
		?>
			<div id="twitter-feed-front" class="section tweets-feed twitter-feed-full-width">
				<div class="container">
					<header>
						<h2 class="home-section-title"><?php _e( 'Recent Tweets', '_baindesign' ); ?></h2>
					</header>
					
					<div id="twitter-avatar" class="section-icon">
						<a href="<?php echo $twitter_url ?>" class="twitter" title="Follow me on Twitter">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
							<span class="visuallyhidden">Twitter</span>
						</a>
					</div><!-- #twitter-avatar -->
					<div id="tweet-wrapper">
						<div id="twitter-feed" class="twitter-feed">
							<div class="slides"></div>
						</div>
					</div><!-- #tweet-wrapper -->
				</div><!-- .container -->
			</div><!-- .section --> 
		<?php
	}
endif;