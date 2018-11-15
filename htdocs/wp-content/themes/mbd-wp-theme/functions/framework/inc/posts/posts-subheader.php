<?php

if ( ! function_exists( 'baindesign324_page_subheader' ) ) :
	function baindesign324_page_subheader() {

		/**
		 * Generate page subheader by post type
		 */

		$post_subheader = '';
		$content = '';

		// Get the post ID
		$post_id = get_the_ID();

		// Get the post type that we're dealing with
		$post_type = get_post_type( $post_id );

		// Get custom field content based on
		// post type.

		if ( $post_type == 'article' ) {
			$client = get_field( 'article_client' );
			$date = get_field( 'article_date' );
		}

		if ( $post_type == 'book' ) {
			$client = get_field( 'book_publisher' );
			$date = get_field( 'book_date' );
		}
		if ( $post_type == 'project' ) {
			$client = get_field( 'project_client' );
			$date = get_field( 'project_date' );
		}

		if ( $post_type == 'talk' ) {
			$client = get_field( 'talk_client' );
			$date = get_field( 'event_date' );
		}

	    // Set up the sub-header/meta based on the post type
	    if ( ( $post_type == "cpt1" ) && ( get_field( "role" ) ) ) {
	    	$content = get_field( "role" );

	    } elseif ( $post_type == "post" ) {

	    	// $content = get_avatar( get_the_author_meta( 'ID' ), 48 );
	    	$content .= baindesign324_posted_on();

	    } elseif ( ( get_post_type() == "product" ) && ( get_field( "date_start" ) ) && ( get_field( "date_end" ) ) ) {

	    	$content = '<div class="event-dates">' . get_field( "date_start" ) . ' &rarr; ' . get_field( "date_end" ) . '</div>';

	    } else {

	    	if ( $client ) {
	    		$content .= '<div class="content-subheader-primary">' . $client . '</div>';
	    	}
	    	if ( $date ) {
	    		$content .= '<div class="content-subheader-secondary">' . $date . '</div>';
	    	}
	    }

	    if( $content ) {

			?>
				<!-- Post Subheader -->
				<div class="post-subheader"><?php echo $content; ?></div>
			<?php 
		}
	}
endif;