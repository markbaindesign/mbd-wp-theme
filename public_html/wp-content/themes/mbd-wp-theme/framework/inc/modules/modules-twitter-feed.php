<?php

if ( ! function_exists( 'baindesign324_display_twitter_feed' ) ) :
	function baindesign324_display_twitter_feed() {
		?>
				<div class="twitter-feed__container">
					<header>
						<h2 class="home-section-title"><?php _e( 'Recent Tweets', '_baindesign' ); ?></h2>
					</header>

					<div id="twitter-feed__wrapper">
						<div id="twitter-feed__feed" class="twitter-feed__feed">
							<ul class="twitter-feed__list"></ul>
						</div>
					</div>
			</div> 
		<?php
	}
endif;