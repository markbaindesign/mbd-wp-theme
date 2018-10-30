<?php

if ( ! function_exists( 'baindesign324_social_links' ) ) :
	function baindesign324_social_links() { 

	
		// Vars
		$twitter_url = get_theme_mod( 'baindesign324_social_media_profile_twitter' ); 
		$github_url = get_theme_mod( 'baindesign324_social_media_profile_github' );
		$facebook_url = get_theme_mod( 'baindesign324_social_media_profile_facebook' ); 
		$googleplus_url = get_theme_mod( 'baindesign324_social_media_profile_googleplus' ); 
		$linkedin_url = get_theme_mod( 'baindesign324_social_media_profile_linkedin' ); 
		$youtube_url = get_theme_mod( 'baindesign324_social_media_profile_youtube' ); 
		$pinterest_url = get_theme_mod( 'baindesign324_social_media_profile_pinterest' ); 
		$instagram_url = get_theme_mod( 'baindesign324_social_media_profile_instagram' );

		if ( ( $twitter_url ) || ( $facebook_url ) || ( $googleplus_url ) || ( $linkedin_url ) || ( $youtube_url) || ( $pinterest_url ) || ( $github_url ) || ( $instagram_url ) ) :
	?>

		<div class="social">
			<ul class="social-media-links">

				<?php // Twitter
					if ( $twitter_url ): ?>				
					<li>
						<a href="<?php echo $twitter_url ?>" class="twitter" target="_blank" title="<?php _e('Follow me on Twitter', '_baindesign'); ?>">
							<!-- <span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span> -->
							<i class="fa fa-twitter"></i>
							<span class="visuallyhidden"><?php _e('Twitter', '_baindesign'); ?></span>
						</a>
					</li>
				<?php endif; ?>

				<?php // Facebook
					if ( $facebook_url ): ?>				
					<li>
						<a href="<?php echo $facebook_url ?>" class="facebook" target="_blank" title="<?php _e('Follow me on Facebook', '_baindesign'); ?>">
							<!-- <span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span> -->
							<i class="fa fa-facebook"></i>
							<span class="visuallyhidden"><?php _e('Facebook', '_baindesign'); ?></span>
						</a>
					</li>
				<?php endif; ?>

				<?php // Google+
					if ( $googleplus_url ): ?>				
					<li>
						<a href="<?php echo $googleplus_url ?>" class="googleplus" target="_blank" title="<?php _e('Follow me on Google+', '_baindesign'); ?>">
							<!-- <span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
							</span> -->
							<i class="fa fa-google-plus"></i>
							<span class="visuallyhidden"><?php _e('Google+', '_baindesign'); ?></span>
						</a>
					</li>
				<?php endif; ?>

				<?php // LinkedIn
					if ( $linkedin_url ): ?>				
					<li>
						<a href="<?php echo $linkedin_url ?>" class="linkedin" target="_blank" title="<?php _e('Follow me on LinkedIn', '_baindesign'); ?>">
							<!-- <span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
							</span> -->
							<i class="fa fa-linkedin"></i>
							<span class="visuallyhidden"><?php _e('LinkedIn', '_baindesign'); ?></span>
						</a>
					</li>
				<?php endif; ?>

				<?php // YouTube
					if ( $youtube_url ): ?>				
					<li>
						<a href="<?php echo $youtube_url ?>" class="youtube" target="_blank" title="<?php _e('Follow me on YouTube', '_baindesign'); ?>">
							<!-- <span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
							</span> -->
							<i class="fa fa-youtube"></i>
							<span class="visuallyhidden"><?php _e('YouTube', '_baindesign'); ?></span>
						</a>
					</li>
				<?php endif; ?>

				<?php // Pinterest
					if ( $pinterest_url ): ?>				
					<li>
						<a href="<?php echo $pinterest_url ?>" class="pinterest" target="_blank" title="<?php _e('Follow me on Pinterest', '_baindesign'); ?>">
							<!-- <span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
							</span> -->
							<i class="fa fa-pinterest"></i>
							<span class="visuallyhidden"><?php _e('Pinterest', '_baindesign'); ?></span>
						</a>
					</li>
				<?php endif; ?>

				<?php // Instagram
					if ( $instagram_url ): ?>				
					<li>
						<a href="<?php echo $instagram_url ?>" class="instagram" target="_blank" title="<?php _e('Follow me on Instagram', '_baindesign'); ?>">
							<!-- <span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
							</span> -->
							<i class="fa fa-instagram"></i>
							<span class="visuallyhidden"><?php _e('Instagram', '_baindesign'); ?></span>
						</a>
					</li>
				<?php endif; ?>

				<?php // Github
					if ( $github_url ): ?>				
					<li>
						<a href="<?php echo $github_url ?>" class="github" target="_blank" title="<?php _e('Follow us on Github', '_baindesign'); ?>">
							<span class="fa-stack fa-lg">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-github fa-stack-1x fa-inverse"></i>
							</span>
							<span class="visuallyhidden"><?php _e('Github', '_baindesign'); ?></span>
						</a>
					</li>
				<?php endif; ?>


			</ul>
		</div>

	<?php endif; ?>
	<?php }
endif;