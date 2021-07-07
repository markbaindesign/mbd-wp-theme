<?php

if ( ! function_exists( 'baindesign324_social_links' ) ) :
	function baindesign324_social_links() {
		if( bd324_get_social_links() ) {
			print bd324_get_social_links();
		}
	}
endif;

if ( ! function_exists( 'bd324_get_social_links' ) ) :
	function bd324_get_social_links() {		
		$content = '';
		 if( have_rows('social_media_links', 'option') ):
			$content.= '<ul class="icon__ul icon__ul--social social-media-links">';
	        while ( have_rows('social_media_links', 'option') ) : the_row();
	            $content.='<li class="icon__li icon__li--social" ><a class="icon__link icon__link--social" href="' . get_sub_field( 'account_url','option' ) . '" ';
	            $content.='"title="'.get_sub_field( 'service_name','option' ).'" ';
	            $content.='"><i class="icon__i icon__i--social social-media-links__icon fab '.get_sub_field( 'icon_class','option' ).'"></i><span class="social-media-links__label">'.get_sub_field( 'service_name','option' ).'</span></a></li>';
	        endwhile;
	        $content.= '</ul>';
		 endif;
		 return $content;
	}
endif;