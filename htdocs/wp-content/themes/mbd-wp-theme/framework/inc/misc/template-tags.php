<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package _mbbasetheme
 */

if ( ! function_exists( 'baindesign324_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function baindesign324_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?><div id="paging-navigation" class="section"><div class="container">
				<nav class="navigation paging-navigation" role="navigation">
					<h1 class="screen-reader-text"><?php _e( 'Content navigation', '_criadoemsampa' ); ?></h1>
					<div class="nav-links">

						<?php if ( get_next_posts_link() ) : ?>
							<div class="nav-previous">
								<footer class="read-more">
									<?php next_posts_link( __( '<span class="post-nav-label"><i class="fa"></i><span class="post-nav-label-text">Previous</span></span>', '_criadoemsampa' ) ); ?>
								</footer>
							</div>
						<?php endif; ?>

						<?php if ( get_previous_posts_link() ) : ?>
							<div class="nav-next">
								<footer class="read-more">
									<?php previous_posts_link( __( '<span class="post-nav-label"><span class="post-nav-label-text">Next</span><i class="fa"></i></span>', '_criadoemsampa' ) ); ?>
								</footer>
							</div>
						<?php endif; ?>

					</div><!-- .nav-links -->
				</nav><!-- .navigation -->
</div><!-- .container --></div><!-- .section -->
	<?php
}
endif;



if ( ! function_exists( 'baindesign324_post_meta' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function baindesign324_post_meta() {
	$time_string = '<time class="entry-date published" datetime="%1$s"><label>Published on</label> %2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="updated" datetime="%3$s"><label>Updated on</label> %4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	printf( __( '
		
		<ul><li class="post-author"><label>By </label> %2$s</li>
		<li class="post-date"> %1$s</li></ul>', '_mbbasetheme' ),
		sprintf( '%2$s',
			esc_url( get_permalink() ),
			$time_string
		),
		sprintf( '<span class="author vcard">%2$s</span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		)
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function _criadoemsampa_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'all_the_cool_cats', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so _criadoemsampa_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so _criadoemsampa_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in _criadoemsampa_categorized_blog.
 */
function _criadoemsampa_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'all_the_cool_cats' );
}
add_action( 'edit_category', '_criadoemsampa_category_transient_flusher' );
add_action( 'save_post',     '_criadoemsampa_category_transient_flusher' );


/**
 * Count the number of footer sidebars to enable dynamic classes for the footer.
 *
 */
function baindesign324_footer_sidebar_class() {
	$count = 0;

	if ( is_active_sidebar( 'footer-sidebar-1' ) )
		$count++;

	if ( is_active_sidebar( 'footer-sidebar-2' ) )
		$count++;

	if ( is_active_sidebar( 'footer-sidebar-3' ) )
		$count++;

	$class = '';

	switch ( $count ) {
		case '1':
			$class = 'one';
			break;
		case '2':
			$class = 'two';
			break;
		case '3':
			$class = 'three';
			break;
	}

	if ( $class )
		echo 'class="' . $class . ' section"';
}