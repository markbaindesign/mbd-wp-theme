<?php
if ( ! function_exists( 'baindesign324_latest_posts' ) ) :
/**
 * Show the most recent posts
 */

function baindesign324_latest_posts() {
	global $post;  
 	$orig_post = $post; 
 	$post_date = 'article_date'; 
	 
		$args=array(  
			'posts_per_page'		=> 5,
			// 'meta_key'   			=> $post_date,
			'orderby'    			=> 'meta_value_num',
			'order'					=> 'DESC', 
			'ignore_sticky_posts' 	=> 1
		);  
	
		$my_query = new wp_query( $args );

	if  ( $my_query->have_posts() ) {
	   	while( $my_query->have_posts() ) {
	    	$my_query->the_post(); 
 		    baindesign324_template_content_archive();
		}
		$post = $orig_post; 
		wp_reset_query();
	}
}
endif;