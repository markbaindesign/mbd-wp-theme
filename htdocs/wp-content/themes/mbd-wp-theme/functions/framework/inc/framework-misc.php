<?php

//
// TODO
//
// => Move all these to their own files

if ( ! function_exists( 'baindesign324_remove_dashboard_widgets' ) ) :
	function baindesign324_remove_dashboard_widgets() {
		global $wp_meta_boxes;
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	}
endif;

if ( ! function_exists( 'baindesign324_imagelink_setup' ) ) :
	function baindesign324_imagelink_setup() {
		/**
		 * Remove default link for images
		 */
		$image_set = get_option( 'image_default_link_type' );
		if ( $image_set !== 'none' ) {
			update_option( 'image_default_link_type', 'none' );
		}
	}
endif;

if ( ! function_exists( 'baindesign324_unhide_kitchensink' ) ) :
	function baindesign324_unhide_kitchensink( $args ) {
		$args['wordpress_adv_hidden'] = false;
		return $args;
	}
endif;

if ( ! function_exists( 'baindesign324_typekit_inline' ) ) :
	function baindesign324_typekit_inline() {
		
		/* Conditionally loads the Typekit script inline if fonts are enqueued */
		
		if ( wp_script_is( 'baindesign324-typekit', 'done' ) ) { 
			echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>'; 
		}
	}
endif;

if ( ! function_exists( 'baindesign324_remove_script_version' ) ) :
	function baindesign324_remove_script_version( $src ){
		/**
		 * Remove Query Strings From Static Resources
		 */
		$parts = explode( '?ver', $src );
		return $parts[0];
	}
endif;

if ( ! function_exists( 'baindesign324_custom_media_sizes' ) ) :
	function baindesign324_custom_media_sizes( $sizes ) {
    return array_merge( $sizes, array(
		  'two-cols' => __('Two Column Layout'),
		  'three-cols' => __('Three Column Layout'),
    ) );
 }
endif;

if ( ! function_exists( 'baindesign324_filter_ptags_on_images' ) ) :
	function baindesign324_filter_ptags_on_images($content){
		/**
		 * Remove default <p> tag on images
		 */
	   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	}
endif;

if ( ! function_exists( 'baindesign324_remove_more_jump_link' ) ) :
	function baindesign324_remove_more_jump_link( $link ) {
		$offset = strpos( $link, '#more-' );
		if ($offset) {
			$end = strpos( $link, '"',$offset );
		}
		if ($end) {
			$link = substr_replace( $link, '', $offset, $end-$offset );
		}
		return $link;
	}
endif;

if ( ! function_exists( 'baindesign324_body_classes' ) ) :
	function baindesign324_body_classes( $classes ) {

		/*
		 * Since we used 'option' in add_setting arguments array
		 * we retrieve the value by using get_option function
		 */
		$baindesign324_settings = get_option( 'baindesign324_settings' );	
		
		$classes[] = $baindesign324_settings['layout_setting'];

		// Slider or grid layout
		if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
			$classes[] = 'slider';
		}
		elseif ( is_front_page() ) {
			$classes[] = 'grid';
		}

		// Add class based on cover image
		if ( get_post_meta( get_the_ID(), 'cover_image', true ) ) {
			
			$classes[] = 'cover-background-image';

		} else {
			$classes[] = 'cover-no-background-image';
		}

		// Add class based on cover content settings
		if ( 'dark' == get_post_meta( get_the_ID(), 'cover_content_color', true ) ) {
			
			$classes[] = 'cover-content-color-dark';

		} else {
			$classes[] = 'cover-content-color-light';
		}

		// A custom class, just for the heck of it!
		$classes[] = 'baindesign';

		// Header layout class
		// $classes[] = 'layout-masthead-standard';

		// Main Nav layout class
		$classes[] = 'layout-main-nav-collapse';	

		
		return $classes;
	}
endif;

if ( ! function_exists( 'baindesign324_remove_default_image_sizes' ) ) :
	function baindesign324_remove_default_image_sizes( $sizes) {
	    unset( $sizes['thumbnail']);
	    unset( $sizes['medium']);
	    unset( $sizes['large']);
	     
	    return $sizes;
	}
endif;

if ( ! function_exists( 'baindesign324_form_contact' ) ) :
	function baindesign324_form_contact() { ?>
		<div class="section contact-form">
			<div class="container">
				<?php echo do_shortcode( '[contact-form-7 id="1364" title="Basic Contact Form"]' ); ?>
			</div><!-- .container -->
		</div><!-- .section -->
	<?php }
endif;

if ( ! function_exists( 'baindesign324_show_login' ) ) :
	function baindesign324_show_login() {
		//
		// TODO
		//
		// => replace with function
		get_template_part( 'header-preheader' );
	}
endif;

if ( ! function_exists( 'baindesign324_show_gallery' ) ) :
	function baindesign324_show_gallery() {
		//
		// TODO
		//
		// => replace with function
		get_template_part( 'modules/module-acf-gallery' );
	}
endif;

if ( ! function_exists( 'baindesign324_footer_logo' ) ) :
	function baindesign324_footer_logo() {
		//
		// TODO
		//
		// => replace with function
		get_template_part( 'components/logo_footer' );
	}
endif;

if ( ! function_exists( 'baindesign324_back_to_top' ) ) :
	function baindesign324_back_to_top() {
		//
		// TODO
		//
		// => replace with function
		get_template_part( 'components/back_to_top' );
	}
endif;

if ( ! function_exists( 'baindesign324_footer_nav' ) ) :
	function baindesign324_footer_nav() {
		//
		// TODO
		//
		// => replace with function
		get_template_part( 'modules/footer-nav' );
	}
endif;

if ( ! function_exists( 'baindesign324_mailchimp_form' ) ) :
	function baindesign324_mailchimp_form() { ?>
		<?php
			# TODO
			# 1. Add simple Mailchimp form
			# 2. Add ID from ACF options
				// Mailchimp Form
		?>
		 <div id="mailchimp-form-front" class="section mailchimp-form">
			<div class="container">
				<header>
					<h2 class="home-section-title"><?php _e( 'Get Updates', '_baindesign' ); ?></h2>
				</header>
				<div id="mc_embed_signup">
					<?php // TO DO replace with value from options ?>
					<form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate inline-a" target="_blank" novalidate>
						<div class="mc-field-group">
							<label for="mce-FNAME">First Name </label>
							<input type="text" value="" placeholder="Your First Name" name="FNAME" class="" id="mce-FNAME">
						</div>
						<div class="mc-field-group">
							<label for="mce-LNAME">Last Name </label>
							<input type="text" value="" placeholder="Your Last Name" name="LNAME" class="" id="mce-LNAME">
						</div>
						<div class="mc-field-group">
							<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
							</label>
							<input type="email" value="" laceholder="Your Email" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>



						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

				    	<div style="position: absolute; left: -5000px;"><input type="text" name="b_e7958e37f3d67cd9c98e24f6c_7b25b42e09" tabindex="-1" value=""></div>


					    	<div class="clear">
					    		<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
							</div>
					</form>
				</div><!--End mc_embed_signup-->
				<small><?php _e( 'You\'ll never get spam from me, and you can unsubscribe easily at any time.', '_baindesign' ); ?></small>
			</div><!-- .container -->
		</div><!-- .section --> 
	<?php }
endif;

if ( ! function_exists( 'baindesign324_latest_blog_posts' ) ) :
	function baindesign324_latest_blog_posts() { ?>
		<?php
			global $latest_blog_posts_module_more;
			global $latest_blog_posts_module_title;
			global $latest_blog_posts_module_sub_title;
		?>
		<div class="section latest-posts">
			<div id="intro-latest-posts" class="container intro">
				<header>
					<h2 class="home-section-title"><?php _e( $latest_blog_posts_module_title, '_baindesign' ); ?></h2>
					<!-- <p><?php _e( $latest_blog_posts_module_sub_title, '_baindesign' ); ?></p>-->
				</header>
			</div>
			<div id="main-latest-posts" class="container">
				<div class="container-latest-posts media-object-container">
					<?php baindesign324_latest_posts(); ?>
				</div>
				<footer class="read-more">
					<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="<?php _e( 'See more posts', '_baindesign' ); ?>" >
						<span class=""><?php _e( $latest_blog_posts_module_more, '_baindesign' ); ?></span>
						<i class="fa"></i>
					</a>
				</footer>
			</div><!-- .container -->
		</div><!-- .section --> 
	<?php }
endif;

if ( ! function_exists( 'baindesign324_testimonials' ) ) :
	function baindesign324_testimonials() { ?>
		<div id="testimonials-front" class="section">
			<div id="testimonials-static" class="container container_narrow">
				<header class="section-header">
					<h2 class="home-section-title"><?php _e( 'What people are saying', '_baindesign' ); ?></h2>
				</header>
				
				<div class="section-icon">
					<span class="fa-stack fa-2x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-quote-left fa-stack-1x fa-inverse"></i>
					</span>
				</div>
				 
				<div id="testimonials">
					<ul class="slides">
						<?php 

							/**
							 *
							 *	Display "featured" testimonial posts
							 *
							 */
						
							$my_query = new WP_Query( array (
								'post_status' => 'publish',
		  						'posts_per_page' => 1,
								'post_type' => 'testimonial',
								'orderby' => 'rand',
								'meta_query'	=> array(
									array(
										'key'	  	=> 'featured_testimonial',
										'value'	  	=> '1',
										'compare' 	=> 'LIKE'
									)	
								)
							) );


							if( $my_query->have_posts() ) : while( $my_query->have_posts()) : $my_query->the_post();
						
							// Vars
							$thumb_id = get_post_thumbnail_id();
							$reviewer_image = get_the_post_thumbnail( $post->ID,'testimonial-image', true );
							$image_url = wp_get_attachment_image_src( $thumb_id,'thumbnail', true);
							$testimonial_content_excerpt = get_post_meta($post->ID, 'testimonial_content_excerpt', true);
							
							// Name
							$name = get_field('testimonial_name');

							// Link
							$link = get_field('testimonial_link');

							// Role
							$role = get_field('testimonial_role');
							
							// Check if the post is featured
							$featured = get_field('featured_testimonial');

						?>
								<li class="slide media_block" data-thumb="<?php echo $image_url[0]; ?>">
									<!-- START baindesign324_content_before -->			
									<?php do_action( 'baindesign324_content_before' ); ?>
									<!-- END baindesign324_content_before -->

									<?php the_content(); ?>
									
									<!-- START baindesign324_content_after -->
									<?php do_action( 'baindesign324_content_after' ); ?>
								 </li><!-- slide media_block -->
										<?php wp_reset_postdata(); ?>			<?php endwhile; ?>

						<?php endif; ?>
					        </ul>
				</div>
			</div><!-- .container -->
		</div><!-- .section -->
	<?php } 
endif;

if ( ! function_exists( 'baindesign324_twitter_feed' ) ) :
	function baindesign324_twitter_feed() {
		if ( get_theme_mod( 'baindesign324_twitter_feed_id' ) ) {
			get_template_part( 'modules/twitter-feed' );
		}
	}
endif;

if ( ! function_exists( 'baindesign324_cover' ) ) :
	function baindesign324_cover() {

		// Defaults
		// $archive_image=$cover_image_url=$cover_image_position_horizontal=$cover_image_position_vertical=$cover_text='';

		// $cover_image_default 			= get_theme_mod( 'baindesign324_default_archive_image', '' );
		$cover_text_vertical_alignment 	= 'middle';

		/**
		 *
		 * Theme Mods
		 * 
		 * By establishing the post type, we can check for a
		 * theme mod (via the Customizer) for this post type. 
		 * 
		 **/
		$post_type 				= get_post_type();
		$tm_cover_image_title 	= 'baindesign324_'.$post_type.'_archive_image';
		$tm_cover_image_url 	= get_theme_mod( $tm_cover_image_title, '' );

		// TODO
		// Replace this Customizer stuff with ACF options

		/**
		 *
		 * Custom Fields
		 * 
		 * Single posts/pages can set a cover image via a
		 * custom field. 
		 * 
		 **/
		$cf_cover_image_url 					= get_field( 'cover_image' );
		$cf_cover_image_position_horizontal 	= get_field( 'image_position_horizontal' );			
		$cf_cover_image_position_vertical 		= get_field( 'image_position_vertical' );
		$cf_cover_text 							= get_field( 'cover_text' );
		$cf_cover_text_vertical_alignment = get_field( 'cover_text_vertical_alignment' );
		$cf_cover_content_color 				= get_field( 'cover_content_color' );

			// Post type archive pages
			if ( is_post_type_archive() ) {

			  	$cover_class_context='cover-archive';

			    if ( $tm_cover_image_url ) {
			    	$cover_class_source = 'cover-theme_mod';
			      	$cover_image_url = $tm_cover_image_url;
			      	$cover_text = '';
			    
			    // Default
			    } else {
			    	$cover_class_source = 'cover-default';
			      	$cover_image_url = $cover_image_default;
			      	$cover_text = '';
			    }

			// Taxonomy archive pages
			} elseif ( is_tax() ) {
				$cover_class_context='cover-tax'; 
				if ( function_exists( 'z_taxonomy_image_url' ) ) {
					$cover_image_url = z_taxonomy_image_url( );
				} else {
			      $cover_image_url = $cover_image_default;
			      $cover_text = '';
			    }

			// Blog archive page
			} elseif ( is_home() ) {
				
				/**
				 * To pull content from the designated blog page, we need
				 * to first establish the page ID of the blog page. 
				 **/

				$page_id = ( 'page' == get_option( 'show_on_front' ) ? get_option( 'page_for_posts' ) : get_the_ID );

				$cf_cover_image_url 					= get_field( 'cover_image', $page_id );
				$cf_cover_image_position_horizontal 	= get_field( 'image_position_horizontal', $page_id );			
				$cf_cover_image_position_vertical 		= get_field( 'image_position_vertical', $page_id );
				$cf_cover_text 							= get_field( 'cover_text', $page_id );
				$cf_cover_text_vertical_alignment 		= get_field( 'cover_text_vertical_alignment', $page_id );

				$cover_class_context='cover-home';

			    if ( $cf_cover_image_url ) {
			    	$cover_image_url = $cf_cover_image_url;
			     	$cover_class_source = 'cover-source-custom-field';
			     	$cover_image_position_horizontal = $cf_cover_image_position_horizontal;	     	
			     	$cover_image_position_vertical = $cf_cover_image_position_vertical;
			     }

		 		// Cover text
				if ( $cf_cover_text ) {
					$cover_text = $cf_cover_text;
					if ( $cf_cover_text_vertical_alignment ) {
						$cover_text_vertical_alignment = $cf_cover_text_vertical_alignment;
					}
				} else {
					$cover_text = get_the_title( $post );
				} 	

			} else {

				// Post & pages

				// For posts/pages, don't show a cover image unless
				// specified.	    

			    if ( $cf_cover_image_url ) {
			    	$cover_image_url = $cf_cover_image_url;
			     	$cover_class_source = 'cover-source-custom-field';
			     	$cover_image_position_horizontal = $cf_cover_image_position_horizontal;	     	
			     	$cover_image_position_vertical = $cf_cover_image_position_vertical;
			     } 		

				// Cover text


				if ( $cf_cover_text ) {
					$cover_text = $cf_cover_text;

				} else {
					$cover_text = '<h1>' . get_the_title() . '</h1>';
				}

				if ( $cf_cover_text_vertical_alignment ) {
					$cover_text_vertical_alignment = $cf_cover_text_vertical_alignment;
				}

			}
			
			/**
			 *
			 * Inline Styles
			 * 
			 * The background image (if it exists) is added and positioned
			 * with inline styles using these variables:
			 * 
			 * $cover_image_url
			 * $cover_image_position_horizontal
			 * $cover_image_position_vertical
			 *
			 * Inline styles allow us to set *actual values* via 
			 * field data, e.g. positioning, color...
			 *  
			 **/

			if ( $cover_image_url ) {
				$inline_style  = 'background-image: url(' . $cover_image_url . ');';  
				$inline_style .= 'background-position: '. $cover_image_position_horizontal .'% '. $cover_image_position_vertical .'%; ';
				$inline_style .= 'position: relative;'; // Allows overlay absolute position
			} else {
				// If there is no cover image, unset the min-height 		
				$inline_style = 'min-height: 0;';
			}

			/**
			 * Cover class array
			 */

			$cover_class=array();

			/**
			 * Cover class array -- Image or no image?
			 */

			if ( $cover_image_url ) {
				$cover_class[]='cover-background-image';
			} else {
				$cover_class[]='cover-no-background-image';		
			}

			/**
			 * Cover class array -- Content color?
			 */
			if ( $cf_cover_content_color=='light') {
				$cover_class[]='cover__dark-image';
			} else {
				$cover_class[]='cover__light-image';
			}

			/**
			 * Cover class array -- Content alignment
			 */
			if ( $cover_text_vertical_alignment=='top' ) {
				$cover_class[]='cover__content-top';
			} elseif ( $cover_text_vertical_alignment=='bottom' ) {
				$cover_class[]='cover__content-bottom';
			} else {
				$cover_class[]='cover__content-middle';
			}

			// TODO (?)
			// Set body class based on cover image

		?>

		<div id="cover" class="cover__section cover <?php echo implode(' ', $cover_class); ?> <?php echo $cover_class_source; ?>" style="<?php echo $inline_style; ?>">
			<div class="cover__container" style="vertical-align: <?php echo $cover_text_vertical_alignment; ?>">
				<div class="content-container">
					<?php do_action( 'baindesign324_cover_top' ); ?>
					<img src="<?php echo $cover_image_url; ?>" class="cover__inline-image">			
					<?php if ($cover_text) : ?>
						<?php echo $cover_text; ?>
					<?php endif; ?>
					<?php do_action( 'baindesign324_cover_bottom' ); ?>
				</div>	
			</div>
		</div><!-- .cover__section -->

		<?php }
endif;

if ( ! function_exists( 'baindesign324_post_nav' ) ) :

	function baindesign324_post_nav() { ?>
		<?php

			// TO DO 
			// Combine with baindesign324_paging_nav()

			// Don't print empty markup if there's nowhere to navigate.
			$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
			$next     = get_adjacent_post( false, '', false );

			if ( ! $next && ! $previous ) {
				return;
			}
		?>
		<nav class="section navigation post-navigation" role="navigation">
			<div class="container">
				<h2 class="screen-reader-text"><?php _e( 'Post navigation', '_criadoemsampa' ); ?></h2>
				<div class="nav-links">
					<?php
						previous_post_link( _x( '<div class="nav-previous"><footer class="read-more">%link</footer></div>', 'Previous link', '_criadoemsampa'), '<span class="post-nav-label"><i class="fa"></i><span class="post-nav-label-text">Previous</span></span><span class="post-nav-link-title">%title</span>' );

						next_post_link( _x( '<div class="nav-next"><footer class="read-more">%link</footer></div>', 'Next link', '_criadoemsampa'), '<span class="post-nav-label"><span class="post-nav-label-text">Next</span><i class="fa"></i></span><span class="post-nav-link-title">%title</span>' );
					?>
				</div><!-- .nav-links -->
			</div>

		</nav><!-- .navigation -->
	<?php }
endif;

if ( ! function_exists( 'baindesign324_page_title' ) ) :
	function baindesign324_page_title() {
		
		$content=$post_title='';

		$post_id = get_the_ID();

		// Get the post type that we're dealing with
		$post_type = get_post_type($post_id);
		$post_link = get_the_permalink($post_id);

		// Set up the title based on the post type
	    if( $post_type == 'cpt1' ) { 
	    	$title = get_field( 'title' ).' ';         
	    	$first_name = get_field( 'first_name' ).' ';         
	    	$last_name = get_field( 'last_name' );         
	        
	        $post_title = $title . $first_name . $last_name;
	    } else {
	    	$post_title = get_the_title();
	    }
	    $content .= '<a href="'.$post_link.'" title="'.$post_title.'"><span>'.$post_title.'</span></a>';
	    print $content;
	}
endif;

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

if ( ! function_exists( 'baindesign324_cover_top' ) ) :
	function baindesign324_cover_top() {
		// Do stuff
	}
endif;

if ( ! function_exists( 'baindesign324_article_header' ) ) :
	function baindesign324_article_header() { ?>		

		<h1 class="page-title"><?php echo get_the_title( ); ?></h1>
		<div class="post-author">By <?php echo get_the_author( ); ?></div>
		<div class="post-date"><?php the_date( ); ?></div>

	<?php }
endif;

if ( ! function_exists( 'baindesign324_content_before' ) ) :
	function baindesign324_content_before() {
		if ( get_post_type() == 'testimonial' ) {
			echo '<blockquote>';
		}
	}
endif;

if ( ! function_exists( 'baindesign324_content_after' ) ) :
	function baindesign324_content_after() {		
		if ( is_single( ) ) {
			
			baindesign324_post_tags();

		}
	}
endif;

if ( ! function_exists( 'baindesign324_main_after' ) ) :
	function baindesign324_main_after() {
		baindesign324_post_nav();
	}
endif;

if ( ! function_exists( 'baindesign324_homepage_flex_content' ) ) :
	function baindesign324_homepage_flex_content() { ?>
			<?php // Loop for ACF Flexible Content ?>
			
			<?php if( have_rows('home_page_flexible_content_sections') ): ?>
				
				<?php while ( have_rows('home_page_flexible_content_sections') ) : the_row(); ?>	
					
					<?php if( get_row_layout() == 'image_gallery_section' ): ?>
						<?php $content = get_sub_field('image_gallery_content'); ?>
						<div class="section section-minor text_block">
							<div class="container container_narrow">
							<?php
								$images = $content;

								if( $images ): ?>
								    <ul class="no-bullets">
								        <?php foreach( $images as $image ): ?>
								            <li>
								                <a href="<?php echo $image['description']; ?>">
								                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?> title="<?php echo $image['title']; ?> />
								                </a>
								                <p><?php echo $image['caption']; ?></p>
								            </li>
								        <?php endforeach; ?>
								    </ul>
								<?php endif; ?>
							</div><!-- .container -->
						</div><!-- .section -->

					<?php elseif( get_row_layout() == 'media_block' ): ?>
							<?php								

								// Vars
								$image_array = get_sub_field('media_block_image');
								$image_url = $image_array["url"];
								$text = get_sub_field('media_block_text');
								$link = get_sub_field('media_block_link');
								$link_text = get_sub_field('media_block_link_text');
								$group_class = get_sub_field('media_object_group_class');
								$group_id = get_sub_field('media_object_group_id');								

								if( $image_url ): ?>
									<div id="<?php echo $group_id ?>" class="section flex-media-object <?php echo $group_class ?>">
										<div class="container container_medium media-object-container">
											<?php baindesign324_template_media_object($image_url, $text, $link, $link_text); ?>
										</div><!-- .container -->
									</div><!-- .section -->
								<?php endif; ?>

					<?php elseif( get_row_layout() == 'testimonials_layout' ): ?>
						<?php baindesign324_testimonials(); ?>

					<?php // elseif( get_row_layout() == 'twitter_feed_layout' ): ?>
						<?php // baindesign324_twitter_feed(); ?>

					<?php elseif( get_row_layout() == 'latest_blog_posts_layout' ): ?>
						<?php baindesign324_latest_blog_posts(); ?>
					
					<?php /* elseif( get_row_layout() == 'mailchimp_signup_form_layout' ):
						baindesign324_template_mailchimp_compact(); */ ?>

					<?php elseif( get_row_layout() == 'gallery_wide' ): ?>
						<?php get_template_part( 'modules/gallery' ); ?>

					<?php endif; ?>

				<?php endwhile; ?>	
			<?php endif; ?>
	<?php }
endif;

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
						<!-- <span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span> -->
						<i class="fa fa-<?php echo $external_link_type; ?>"></i>
						<span class="visuallyhidden"><?php echo $external_link_title; ?></span>

					</a></li>
				<?php endwhile; ?>
			</ul>
			<?php 
		}
	}
endif;

if ( ! function_exists( 'baindesign324_prefix_nav_description' ) ) :
	function baindesign324_prefix_nav_description( $item_output, $item, $depth, $args ) {
	    if ( !empty( $item->description ) && ! $depth ) {
	        $item_output = str_replace( $args->link_after . '</a>', '<p class="menu-item-description">' . $item->description . '</p>' . $args->link_after . '</a>', $item_output );
	    }
	 
	    return $item_output;
	}
endif;

if ( ! function_exists( 'baindesign324_woocommerce_product_meta' ) ) :
	function baindesign324_woocommerce_product_meta() {
		?>
			<div id="woocommerce_product_meta" class="section">
				<div class="container container_narrow">
					<?php echo woocommerce_template_single_price(); ?>
					<?php echo woocommerce_template_single_add_to_cart(); ?>					
				</div><!-- .container .container_medium-->
			</div><!-- #id .section-class .section -->
		<?php
	}
endif;

if ( ! function_exists( 'baindesign324_testimonial_meta' ) ) :
	function baindesign324_testimonial_meta() {
		$post_id = get_the_ID();
		
		// Image
		$thumb_id = get_post_thumbnail_id();
		$reviewer_image = get_the_post_thumbnail( $post_id,'square' );
		$image_url = wp_get_attachment_image_src( $thumb_id,'thumbnail', true);

		// Meta
		$testimonial_content_excerpt = get_post_meta($post_id, 'testimonial_content_excerpt', true);
		$reviewer_name = get_post_meta($post_id, 'testimonial_name', true);
		$reviewer_link = get_post_meta($post_id, 'testimonial_link', true);
		$reviewer_description = get_field('testimonial_role',$post_id);
		$featured = get_post_meta($post_id, 'featured_testimonial', true);

		$reviewer_image_content = '';
		if ( $reviewer_image ) {
			$reviewer_image_content .= '<span class="reviewer_image">';
			$reviewer_image_content .= $reviewer_image;
			$reviewer_image_content .= '</span><!-- .reviewer_image -->';
		}

		$reviewer_name_content = '';
		if ( $reviewer_name ) {

			if ( $reviewer_link ) {
				$reviewer_name_content .= '<a class="reviewer_link" href="';
				$reviewer_name_content .= $reviewer_link;
				$reviewer_name_content .= '">';
			}

			$reviewer_name_content .= '<cite class="reviewer_name">';
			$reviewer_name_content .= $reviewer_name;
			$reviewer_name_content .= '</cite><!-- .reviewer_name -->';

			if ( $reviewer_link ) {
				$reviewer_name_content .= '</a><!-- .reviewer_link -->';
			}
		}

		if ( $reviewer_description ) { 
			$reviewer_description_content = '<span class="review_description">';
			$reviewer_description_content .= $reviewer_description;
			$reviewer_description_content .= '</span><!-- .review-description -->';
		}

		$content = $reviewer_image_content . $reviewer_name_content . $reviewer_description_content;
		?>
			<div class="testimonial-meta">
				<?php echo $content; ?>	
			</div><!-- .testimonial-meta -->

		<?php
	}
endif;

if ( ! function_exists( 'baindesign324_featured_image' ) ) :
	function baindesign324_featured_image( $size ) {
		$post_id = get_the_ID();
		
		// Image
		$thumb_id = get_post_thumbnail_id();
		$featured_image = get_the_post_thumbnail( $post_id, $size );
		$image_url = wp_get_attachment_image_src( $thumb_id, $size, true);

		$featured_image_content = '';
		if ( $featured_image ) {
			$featured_image_content .= $featured_image;
		}

		$content = $featured_image_content;
		?>
			<div class="featured-image">
				<?php echo $content; ?>	
			</div><!-- .featured-image -->

		<?php
	}
endif;
