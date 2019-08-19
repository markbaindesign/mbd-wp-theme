<?php

if ( ! function_exists( 'baindesign324_page_title' ) ) :
	function baindesign324_page_title() {
		
		$content=$post_title='';

		$post_id = get_the_ID();

		// Get the post type that we're dealing with
		$post_type = get_post_type($post_id);
		$post_link = get_the_permalink($post_id);

		// Set up the title based on the post type
	    if( $post_type == 'cpt1' ) { 
	    	$title = get_field( 'title' ).' ';         
	    	$first_name = get_field( 'first_name' ).' ';         
	    	$last_name = get_field( 'last_name' );         
	        
	        $post_title = $title . $first_name . $last_name;
	    } else {
	    	$post_title = get_the_title();
	    }
	    $content .= '<a href="'.$post_link.'" title="'.$post_title.'"><span>'.$post_title.'</span></a>';
	    print $content;
	}
endif;