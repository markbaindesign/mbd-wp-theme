<?php

if ( ! function_exists( 'baindesign324_related_blog_posts' ) ) :
	/**
	 * Show a set of related posts based on tags
	 */

	function baindesign324_related_blog_posts() {
		global $post;  
	 	$orig_post = $post;

	 	// Only show related posts on single posts
	 	if ( ! is_single() ) {
	 		return;
	 	}

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
			'posts_per_page'		=> 5, 
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

		if  ( $my_query->have_posts() ) : ?>
			<div class="posts posts--related">
				<div class="container">
					<header><h3><?php _e('Related blog posts','_baindesign'); ?></h3></header>
					<div class="posts__container">
						<?php while( $my_query->have_posts() ) {
				    		$my_query->the_post();
			 		    	baindesign324_template_content_archive();
						} ?>
					</div><!-- ..container -->
					<div class="posts__container clone">
						<?php while( $my_query->have_posts() ) {
				    		$my_query->the_post();
			 		    	baindesign324_template_content_archive();
						} ?>
					</div><!-- ..container -->
				</div><!-- ..container -->
			</div><!-- #related-blog-posts .section -->	
		<?php endif;					
		$post = $orig_post; wp_reset_query();
	}
endif;