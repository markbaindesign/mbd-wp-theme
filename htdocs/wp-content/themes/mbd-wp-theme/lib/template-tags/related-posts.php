<?php
/**
 * Related Post function
 *
 * Loaded via functions.php
 *
 */

if ( ! function_exists( 'mbdmaster_related_posts' ) ) :
	/**
	 * Show a set of related posts based on tags
	 */

	function mbdmaster_related_posts() {
		global $post;  
	 	$orig_post = $post;  
		$custom_taxterms = wp_get_object_terms( 
			$post->ID, 'post_tag', array(
				'fields' => 'ids'
			) 
		);
		 
		$args = array(  
 			'post_type' => array(
 				'award',
 				'book',
 				'interview',
 				'project',
 				'post',
 				'talk',
 				'film',
			),
			'post__not_in'			=> array( 
				$post->ID 
			),  
			'posts_per_page'		=> 3, 
			'ignore_sticky_posts' 	=> 1,
			'tax_query' => array(
			    array(
			        'taxonomy' => 'post_tag',
			        'field' => 'id',
			        'terms' => $custom_taxterms
			    )
			),
		);  
	
		$my_query = new wp_query( $args );

		if  ( $my_query->have_posts() ) {
	    	while( $my_query->have_posts() ) {
	    		$my_query->the_post();
 		    	get_template_part('content', 'archive' );
			}
			$post = $orig_post; wp_reset_query();
		} else {
			echo 'Nothing found... Looks like this post is just unique :)';
		}
	}
endif;