<?php

/**
 * Display flexible content for posts & pages
 */

if ( ! function_exists( 'baindesign324_flexible_content' ) ) :
	function baindesign324_flexible_content() { ?>
		<?php if( get_row_layout() == 'text_block' ): ?>
			<?php $content = get_sub_field('text'); ?>
			<div class="section text_block">
				<div class="container">
					<?php echo $content; ?>
				</div><!-- .container -->
			</div><!-- .section -->

		<?php 
		elseif( get_row_layout() == 'image_gallery_section' ):
			baindesign324_image_gallery();
		elseif( get_row_layout() == 'blockquote' ): // TODO
			baindesign324_blockquote();
		endif;
	}
endif;