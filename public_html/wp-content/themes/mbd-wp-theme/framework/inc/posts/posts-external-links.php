<?php

if ( ! function_exists( 'baindesign324_page_external_links' ) ) :
	function baindesign324_page_external_links() {

		$post_id = get_the_ID();

		// Get the post type that we're dealing with
		$post_type = get_post_type( $post_id );

		if ( ( $post_type == "cpt1" ) && ( have_rows( 'external_links' ) ) ) { ?>
			<ul class="social-media-links">
				<?php while ( have_rows('external_links') ) : the_row() ; 
					// vars
					$external_link_url = get_sub_field('external_link_url');
					$external_link_title = get_sub_field('external_link_title');
					$external_link_type = get_sub_field('external_link_type'); 
				?>

					<li><a href="<?php echo $external_link_url; ?>" class="<?php echo $external_link_type; ?>" target="_blank" title="<?php echo $external_link_title; ?>">
						<i class="fa fas-<?php echo $external_link_type; ?>"></i>
						<span class="visuallyhidden"><?php echo $external_link_title; ?></span>

					</a></li>
				<?php endwhile; ?>
			</ul>
			<?php 
		}
	}
endif;