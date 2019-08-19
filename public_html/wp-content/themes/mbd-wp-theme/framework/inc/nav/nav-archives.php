<?php

if ( ! function_exists( 'baindesign324_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function baindesign324_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
		<nav class="nav-links">
			<?php if ( get_next_posts_link() ) : ?>
				<div class="nav-links__previous">
					<footer class="read-more">
						<?php next_posts_link( __( '<span class="post-nav-label"><i class="fa"></i><span class="post-nav-label-text">Previous</span></span>', '_baindesign' ) ); ?>
					</footer>
				</div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
				<div class="nav-links__next">
					<footer class="read-more">
						<?php previous_posts_link( __( '<span class="post-nav-label"><span class="post-nav-label-text">Next</span><i class="fa"></i></span>', '_baindesign' ) ); ?>
					</footer>
				</div>
			<?php endif; ?>
	</nav>
<?php }
endif;