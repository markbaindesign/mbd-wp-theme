<?php
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
?>
<nav class="section navigation post-navigation" role="navigation">
	<div class="container">
		<h2 class="screen-reader-text"><?php _e( 'Lesson navigation', '_criadoemsampa' ); ?></h2>
		<div class="nav-links cf">
			<?php
				previous_post_link( _x( '<div class="nav-previous"><span class="post-nav-label nav-previous-label meta-nav">Previous Lesson</span>%link</div>', 'Previous lesson link', '_criadoemsampa'), '%title' );

				next_post_link( _x( '<div class="nav-next"><span class="post-nav-label nav-next-label meta-nav">Next Lesson</span>%link</div>', 'Next lesson link', '_criadoemsampa'), '%title' );
			?>
		</div><!-- .nav-links -->
	</div>

</nav><!-- .navigation -->