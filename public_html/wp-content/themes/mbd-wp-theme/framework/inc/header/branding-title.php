<?php
/**
 * Branding: simple text title
 */

if ( ! function_exists( 'baindesign324_site_branding_title' ) ) :
	function baindesign324_site_branding_title() {
	// Vars
	$blog_title = get_bloginfo('name'); ?>

		<div class="site-branding">
			<div class="site-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo $blog_title; ?> | Home">
					<span class="branding-title"><?php echo $blog_title; ?></span>					
				</a>
			</div><!-- .site-branding -->
		</div><!-- .site-branding -->

	<?php  }
endif;