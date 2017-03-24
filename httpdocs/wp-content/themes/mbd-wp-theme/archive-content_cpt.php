<?php get_header(); ?>
<div id="intro" class="section">
	<div class="container">
		<h1 class="h2 page-title text-block">
			<?php _e( 'Content', '_criadoemsampa' ); ?> 
		</h1>
		<?php
			// If there's a custom intro text, get it
			$content_url ='';
		 	if ( is_post_type_archive( 'content_cpt' ) ) { 
			    if ( get_theme_mod( 'mbdmaster_content_archive_content', '' ) ) {
			      $content_url = get_theme_mod( 'mbdmaster_content_archive_content', '' );
			    }
		    } else {
		    	$content_url = get_the_archive_description();
		    }

		    if ( $content_url ) {
		    	echo '<p class="intro h4">' . $content_url . '</p>';
		    }
		?>
	</div><!-- .container -->
</div><!-- #intro .section -->

<div id="main" class="section grid-cols-two">
	<div class="container">
		<!-- Overview -->
		<?php if ( 
			get_template_part( 'modules/module-overview') ) { 
				get_template_part( 'modules/module-overview' );
			}
		?>
	</div><!-- .container -->
</div><!-- #main -->
<?php get_footer(); ?>