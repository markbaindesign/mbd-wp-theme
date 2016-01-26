<?php 
/* MBD Custom Latest Posts Shortcode */

add_shortcode('mbd-latest-posts', 'mbdmaster324_shortcode_latestposts');

function mbdmaster324_shortcode_latestposts( $atts ) {
ob_start();
    $query = new WP_Query( array(
        'posts_per_page' => 3,
    ) );  
    if ( $query->have_posts() ) { ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            	<div class="home-latest-posts">
					<div id="home-latest-posts-thumb">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail('markbaindesign-sq-50');
						} else { ?>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/default-thumbnail.png" alt="<?php the_title(); ?>" />
						<?php } ?>
					</div>
					<div class="home-latest-posts-title">
						<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
					</div>
					<span id="home-latest-posts-author" class="home-meta">By <?php the_author_posts_link(); ?></span>
					<span id="home-latest-posts-date" class='home-meta'><?php the_time('j F, Y'); ?></span>
					<div id="home-latest-posts-comments" class="home-meta"><?php comments_number( 'no responses', 'one response', '% responses' ); ?></div>
				</div>
			<?php endwhile; ?>
			<span class="read-more">
				<a class="button" href="<?php bloginfo( 'url' ) ?>/blog/">See more blog posts</a>
			</span>
            <?php wp_reset_postdata(); ?>
        </div>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}

// [mbd-latest-posts]

?>