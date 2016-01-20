<?php

//	Date/author meta ( "Posted On" )

function mbdmaster_posted_on() {
	printf( __( '<span class="byline"><span class="author vcard">%7$s</span></span> <time class="entry-date" datetime="%3$s" pubdate>%4$s</time>', 'mbdmaster' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'mbdmaster' ), get_the_author() ) ),
		esc_html( get_the_author() )
	);
}

//	Post meta ( Categories/Tags/etc. )

function mbdmaster_post_meta() {

	$categories_list = get_the_category_list( );
	$tag_list = get_the_tag_list( '<li>','</li><li>','</li>' );



		if ( $categories_list ) {
			echo '<ul><label>Categories</label> ' . $categories_list . '</ul>';
		}

		if ( $tag_list ) {
			echo '<ul><label>Tags</label> ' . $tag_list . '</ul>';
		}
	

}
