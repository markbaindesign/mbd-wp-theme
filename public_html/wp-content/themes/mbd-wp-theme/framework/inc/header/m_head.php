<?php
if ( ! function_exists( 'baindesign324_mmenu_mhead' ) ) :
	function baindesign324_mmenu_mhead() { ?>
	    <header id="masthead" class="mh-head headhesive custom324_mmenu_mhead">
	       <span class="mh-btns-left">
	            <a class="mh-hamburger" href="#menu"></a>
	       </span>
	       <span class="mh-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php echo get_bloginfo( 'name' ); ?> | Home"><div class="mobile-menu-logo mh-logo">
	       		<?php echo get_bloginfo( 'name' ); ?>
	       	</a></div></span>
	       <span class="mh-btns-right">
	             <?php echo baindesign324_toggle_search(); ?>
	        </span>
	    </header>

	<?php }
endif;