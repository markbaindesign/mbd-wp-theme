<?php get_header(); ?>

<!-- Hero -->
<?php get_template_part( 'content', 'cover-front' ); ?>

<div id="intro" class="section">
		<div class="container">
			<?php
				// Determine context
				$page_id = ( 'page' == get_option( 'show_on_front' ) ? get_option( 'page_on_front' ) : get_the_ID );
				// WP_Query arguments
				$args = array (
					'post_type' => 'page',
					'p' => $page_id
				);
				// The Query
				$query1 = new WP_Query( $args );

				// The Loop
				while ( $query1->have_posts() ) {
					$query1->the_post();
					echo the_content();
				}

				/* Restore original Post Data 
				 * NB: Because we are using new WP_Query we aren't stomping on the 
				 * original $wp_query and it does not need to be reset with 
				 * wp_reset_query(). We just need to set the post data back up with
				 * wp_reset_postdata().
				 */
				wp_reset_postdata();
			?>
	</div><!-- .container -->
</div><!-- .section -->

<!-- Categories Grid -->
<?php 
	/*
		if ( get_template_part( 'modules/module', 'categories-grid' ) ) { 
			get_template_part( 'modules/module', 'categories-grid' );
		}
	*/
?>

<!-- Latest Posts (Work CPT) -->
<?php 
	/*
		if ( get_template_part( 'modules/module', 'categories-grid' ) ) { 
			get_template_part( 'modules/module', 'categories-grid' );
		}
	*/
?>

<!-- Latest Posts -->
<?php if ( 
	get_template_part( 'modules/module', 'latest-posts' ) ) { 
		get_template_part( 'modules/module', 'latest-posts' );
	}
?>

<!-- Logo Gallery -->
<?php if ( 
	get_template_part( 'modules/module-acf-gallery' ) ) { 
		get_template_part( 'modules/module-acf-gallery' );
	}
?>

<!-- MailChimp Form -->
<?php if ( 
	get_template_part( 'modules/module', 'mailchimp-form' ) ) { 
		get_template_part( 'modules/module', 'mailchimp-form' );
	}
?>

<!-- Twitter Feed -->
<?php if ( 
	get_template_part( 'modules/module', 'twitter-feed' ) ) { 
		get_template_part( 'modules/module', 'twitter-feed' );
	}
?>

<?php get_footer(); ?>