<div class="section">
	<div class="container">
		<div class="content-container">
			
			<!-- START baindesign324_content_before -->			
			<?php do_action( 'baindesign324_content_before' ); ?>
			<!-- END baindesign324_content_before -->

			<?php the_content(); ?>
			
			<!-- START baindesign324_content_after -->
			<?php do_action( 'baindesign324_content_after' ); ?>
			<!-- END baindesign324_content_after -->

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', '_mbbasetheme' ),
					'after'  => '</div>',
				) );
			?>

		</div><!-- .content-container -->   
	</div><!-- .container -->
</div><!-- .section -->