<?php // get_sidebar( 'footer' ); ?>

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


<footer id="colophon" class="section site-footer" role="contentinfo">
	<div class="container">
		<div id="back-to-top" >
			<a href="#masthead" title="<?php _e('Go back to the top', '_mbdmaster'); ?>" class="si-icons si-icons-hover">
				<span class="visuallyhidden"><?php _e('Go back to the top', '_mbdmaster'); ?></span> 
				<span class="si-icon si-icon-nav-up-arrow" data-icon-name="navUpArrow"></span>
			</a>
		</div><!-- #back-to-top -->

		<?php if ( 
			get_template_part( 'modules/module', 'social-links' ) ) { 
				get_template_part( 'modules/module', 'social-links' );
			}
		?>

	<div class="site-info">

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
		<div id="copyright" dir="ltr">&copy; <?php echo date("Y"); ?> <?php echo bloginfo( 'name' ); ?></div> 
	<!--	<p id="tagline">
			<?php echo get_bloginfo( 'description' ); ?>
		</p> --> 
	<div id="design">Made by <a href="http://markbaindesign.com" title="Visit the website of Mark Bain Design">Mark Bain Design</a>
	</div><!-- #design -->

	</div><!-- .site-info -->

	</div><!-- .container -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
