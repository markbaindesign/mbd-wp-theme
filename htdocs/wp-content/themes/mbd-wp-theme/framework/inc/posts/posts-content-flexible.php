<?php

/**
 * Display flexible content
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

		<?php elseif( get_row_layout() == 'gallery_wide' ): ?>
			<?php // TODO use a function
			get_template_part( 'modules/gallery' ); ?>
		<?php endif; ?>	
	<?php }
endif;