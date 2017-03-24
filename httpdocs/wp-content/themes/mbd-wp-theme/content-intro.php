<div id="intro" class="section">
	<div class="container">
		<h1 class="h2 page-title">
			<?php if( get_field( 'course_id' ) ): ?>
				<span class="course-id"><?php echo get_field('course_id'); ?></span>
			<?php endif; ?>
			<?php the_title(); ?>
		</h1>
		<?php
			// If there's a custom intro text, get it
			$content_url ='';
		 	if ( is_post_type_archive( 'content_cpt' ) ) { 
			    if ( get_theme_mod( 'mbdmaster_content_archive_content', '' ) ) {
			      $content_url = get_theme_mod( 'mbdmaster_content_archive_content', '' );
			    }
		    } else {
		    	// Get category description
		    	$content_url = get_the_archive_description();
		    }

		    if ( $content_url ) {
		    	echo '<p class="intro h4">' . $content_url . '</p>';
		    }

		?>

		<?php if( is_singular( 'content_cpt' ) ): ?>
			<?php 
				$summary = get_field( 'content_summary' );
				$excerpt = get_the_excerpt();
				if ( $summary ) {
					$intro = $summary;
				} else {
					$intro = $excerpt;
				}
			 ?>
			 <p class="intro h4"><?php echo $intro; ?></p>
		<?php endif; ?>

	</div><!-- .container -->
</div><!-- #intro .section -->	