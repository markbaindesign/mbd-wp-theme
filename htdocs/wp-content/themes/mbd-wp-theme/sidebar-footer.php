<?php

	if (   ! is_active_sidebar( 'footer-sidebar-1'  )
		&& ! is_active_sidebar( 'footer-sidebar-2' )
		&& ! is_active_sidebar( 'footer-sidebar-3'  )
	)
		return;
?>
<div id="widget-area" <?php baindesign324_footer_sidebar_class( "section" ); ?>>
	<div class="container">
		<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
			<div class="widget-container">
				<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
			<div class="widget-container">
				<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
			<div class="widget-container">
				<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
			</div>
		<?php endif; ?>			
	</div>
</div>