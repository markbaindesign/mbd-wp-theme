<?php

if ( ! function_exists( 'baindesign324_site_info_copyright' ) ) :
	function baindesign324_site_info_copyright() { ?>	
			<div class="copyright site-info site-info__copyright">
				<?php do_action( 'bd324_copyright_symbol' ); ?>
				<span class="copyright__symbol">&copy;</span>
				<span class="copyright__sitename"><?php echo date("Y"); ?> <?php echo bloginfo( 'name' ); ?></span>
			</div>
	<?php }
endif;

if ( ! function_exists( 'baindesign324_site_info_design_credit' ) ) :
	function baindesign324_site_info_design_credit() { ?>
		<div class="site-info site-info__design-credit">
			<?php /* translators: Design Credit, linking to bain.design */ _e('Site made by', '_baindesign'); ?> <a href="//bain.design" title="<?php _e('Go to bain.design', '_baindesign'); ?>"><?php _e('bain.design', '_baindesign'); ?></a>
		</div>
	<?php }
endif;