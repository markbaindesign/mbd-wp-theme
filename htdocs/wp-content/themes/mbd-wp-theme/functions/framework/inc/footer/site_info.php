<?php
if ( ! function_exists( 'baindesign324_site_info' ) ) :
	function baindesign324_site_info() { ?>
		<ul class="site-info">		
			<li class="copyright">
				<i class="far fa-copyright"></i> <?php echo date("Y"); ?> <?php echo bloginfo( 'name' ); ?>
			</li>
			<li class="credit-design">
				<?php /* translators: Design Credit, linking to bain.design */ _e('Site made by', '_baindesign'); ?> <a href="//bain.design" title="<?php _e('Go to bain.design', '_baindesign'); ?>"><?php _e('bain.design', '_baindesign'); ?></a>
			</li>
		</ul><!-- .site-info -->
	<?php }
endif;