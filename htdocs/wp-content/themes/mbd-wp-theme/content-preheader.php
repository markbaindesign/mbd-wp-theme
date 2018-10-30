<div id="preheader" class="section">
	<div class="container">
		
		<?php // Language Switcher
			// Uses WPML plugin 
			if ( class_exists( 'SitePress' ) && function_exists( 'baindesign324_languages_list' ) ) {
				echo '<div id="switcher">' . baindesign324_languages_list . '</div>';
			} 
		?>
		
		<div id="preheader-social">
			<?php get_template_part( 'components/social-links' ); ?>
		</div>
		
	</div>
</div>