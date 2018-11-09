<?php
	if (   ! is_active_sidebar( 'sidebar-1'  ))
		return;
?>
<div id="secondary" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div class="widget-container">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	<?php endif; ?>
</div><!-- #secondary -->
