<?php

if ( ! function_exists( 'bd324_page_external_links' ) ) :
	function bd324_page_external_links($id) {
		if ( ( have_rows( 'external_links', $id ) ) ) {
			echo '<ul class="social-media-links">';
				while ( have_rows('external_links', $id) ) : the_row() ;
					bd324_external_link_item($id);
				endwhile;
			echo '</ul>';
		}
	}
endif;

// Link items
if ( ! function_exists( 'bd324_external_link_item' ) ) :
	function bd324_external_link_item( $id ) {
		// vars
		$url = get_sub_field('external_link_url', $id );
		$title = get_sub_field('external_link_title', $id );
		$type = get_sub_field('external_link_type', $id );

		echo '<li><a href="'.$url .'" class="'.$class.'" title="'.$title.'">';
		echo '<i class="fa fas-'.$type.'"></i>';
		echo '<span class="link__label">';
		echo $title;
		echo '</span>';
		echo '</a></li>';

	}
endif;