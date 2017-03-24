<?php // get_sidebar( 'footer' ); ?>

<!-- Callout Facebook -->
<?php $facebook_url = get_theme_mod( 'mbdmaster_social_media_profile_facebook' );
	if ( ( $facebook_url ) && ( get_template_part( 'modules/module', 'callout_facebook' ) ) ) { 
		get_template_part( 'modules/module', 'callout_facebook' );
	}
?>

<?php if ( has_nav_menu( 'footer' ) ) : ?>
	<div id="footer-navigation" class="section footer-nav-menu">
		<div class="container">
			<nav class="secondary-navigation">
				<?php wp_nav_menu( array( 
						'theme_location' => 'footer', 
						'container' => 'ul', 
						'container_class' => 'nav-collapse main-navigation ',
						'fallback_cb' => false
					) ); 
				?>				
			</nav>
		</div><!-- .container -->
	</div><!-- .section -->
<?php endif; ?>

<!-- Callout Facebook -->
<?php 
	if ( get_template_part( 'modules/module-acf-gallery' ) ) { 
		get_template_part( 'modules/module-acf-gallery' );
	}
?>
		
<!-- Site Footer -->
<footer id="colophon" class="section site-footer" role="contentinfo">
	<div class="container">
		<div id="back-to-top" >
			<a href="#masthead" title="<?php _e('Go back to the top', '_criadoemsampa'); ?>" class="si-icons si-icons-hover">
				<span class="visuallyhidden"><?php _e('Go back to the top', '_criadoemsampa'); ?></span> 
				<span class="si-icon si-icon-nav-up-arrow" data-icon-name="navUpArrow"></span>
			</a>
		</div><!-- #back-to-top -->

		<?php if ( 
			get_template_part( 'modules/module', 'social-links' ) ) { 
				get_template_part( 'modules/module', 'social-links' );
			}
		?>

		<?php
			/*
			 * Show site logo
			 */

			$footer_logo_desktop = get_theme_mod( 'mbdmaster_footer_logo_desktop' );
			$footer_logo_mobile = get_theme_mod( 'mbdmaster_footer_logo_mobile' );

			if ( $footer_logo_desktop || $footer_logo_mobile ) {
				// There's a footer logo... Let's do this!
				$content = '<div id="footer-logo">';
				$content .= '<img src="';			
				if ( $footer_logo_desktop && !$footer_logo_mobile ) {
					// No mobile-specific logo --> show desktop version on all devices.
					// No class required
					$content .= $footer_logo_desktop . '" id="logo">';
				} else {
					// Add classes for media queries to do their magic!
					$content .= $footer_logo_mobile . '" id="logo" class="show-on-mobile-only">';
					$content .= '<img src="' . $footer_logo_desktop . '" id="logo" class="show-on-desktop-only">';
				} 
			  	$content .= '</div><!-- #footer-logo -->';
			  	print $content;
			  	
			  } 

		?>

	<div class="site-info">		
		<div id="copyright" dir="ltr">
			<a href="http://creativecommons.org/licenses/by-nc-sa/4.0/" class="no-border"><img src="https://licensebuttons.net/i/l/by-nc-sa/transparent/ff/ff/ff/88x31.png" title="<?php echo bloginfo( 'name' ); ?> <?php _e( 'is is licensed under a', '_criadoemsampa' ); ?> <?php _e( 'Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License', '_criadoemsampa' ); ?>"></a>
		</div>
		<span class="pipe">|</span>
		<div id="tagline"><?php echo get_bloginfo( 'description' ); ?></div>
		<div id="image-credit"><?php _e( 'Map image via', '_criadoemsampa' ); ?> <a href="https://en.wikipedia.org/wiki/Moema_(district_of_S%C3%A3o_Paulo)">Wikipedia</a></div>
		<span class="pipe">|</span>		
		<div id="design">
			<?php /* translators: Design Credit, linking to bain.design */ _e('Site made by', '_criadoemsampa'); ?> <a href="http://bain.design" title="<?php _e('Go to bain.design', '_criadoemsampa'); ?>"><?php _e('bain.design', '_criadoemsampa'); ?></a>
		</div>
	</div><!-- .site-info -->

	</div><!-- .container -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
