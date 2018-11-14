<?php

if ( ! function_exists( 'baindesign324_social_links' ) ) :
	function baindesign324_social_links() {

	    if( have_rows('social_media_links', 'option') ):
	        echo '<ul class="social-media-links">';
	        while ( have_rows('social_media_links', 'option') ) : the_row();
	            $content='<li><a target="_blank" href="' . get_sub_field( 'account_url','option' ) . '" ';
	            $content.='"title="'.get_sub_field( 'service_name','option' ).'" ';
	            $content.='"><i class="fa '.get_sub_field( 'icon_class','option' ).'"></i><span class="visuallyhidden">'.get_sub_field( 'service_name','option' ).'</span></a></li>';
	            echo $content;
	        endwhile;
	        echo '</ul>';
	    else :
	        echo '<!-- No social media accounts found! -->';
	        echo '<!-- Add an account via Theme Settings -->';
	    endif;
	}
endif;