<?php

/**
 * Content default
 */

if ( ! function_exists( 'baindesign324_content' ) ) :
	function baindesign324_content() {
	?><div class="section">
	<div class="container">
		<div class="content-container">	
			<?php do_action( 'baindesign324_content_before' ); ?>
			<?php the_content(); ?>
			<?php do_action( 'baindesign324_content_after' ); ?>
		</div><!-- .content-container -->   
	</div><!-- .container -->
</div><!-- .section --><?php
}
endif;