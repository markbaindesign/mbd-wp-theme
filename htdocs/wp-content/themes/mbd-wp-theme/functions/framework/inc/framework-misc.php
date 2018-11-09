<?php

/**
 * Remove Dashboard Meta Boxes
 */
function mb_remove_dashboard_widgets() {
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

/**
 * Remove default link for images
 */
function baindesign324_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	if ( $image_set !== 'none' ) {
		update_option( 'image_default_link_type', 'none' );
	}
}

/**
 * Show Kitchen Sink in WYSIWYG Editor
 */
function baindesign324_unhide_kitchensink( $args ) {
	$args['wordpress_adv_hidden'] = false;
	return $args;
}

/**
 * Add Typekit Webfonts Inline Script
 */	
function baindesign324_typekit_inline() {
	
	/* Conditionally loads the Typekit script inline if fonts are enqueued */
	
	if ( wp_script_is( 'baindesign324-typekit', 'done' ) ) { 
		echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>'; 
	}
}

function baindesign324_load_webfonts() {
	// echo '<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700,800" rel="stylesheet">'; 
}


/**
 * Remove Query Strings From Static Resources
 */
function baindesign324_remove_script_version( $src ){
	$parts = explode( '?ver', $src );
	return $parts[0];
}

function baindesign324_custom_media_sizes( $sizes ) {
    return array_merge( $sizes, array(
		  'two-cols' => __('Two Column Layout'),
		  'three-cols' => __('Three Column Layout'),
    ) );
 }

/**
 * Remove default <p> tag on images
 */
function baindesign324_filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

/**
 * Remove Read More Jump
 */
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

/**
 * Custom body classes
 */
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




/*
 * Add Featured Content functionality.
 *
 * To overwrite in a plugin, define your own Featured_Content class on or
 * before the 'setup_theme' hook.
 */



add_filter('oembed_dataparse','youtube_force_rel',10,3);
function youtube_force_rel($return, $data, $url) {
    if ($data->provider_name == 'YouTube') {
        return str_replace('feature=oembed', 'feature=oembed&#038;rel=0', $return);
    } else {
        return $return;
    }
}

/**
 * Remove default WordPress image sizes
 */
function baindesign324_remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
     
    return $sizes;
}

/**
 * Add ACF Options page
 */
if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page();	
}

function baindesign324_form_contact() { ?>
<div class="section contact-form">
	<div class="container">
		<?php echo do_shortcode( '[contact-form-7 id="1364" title="Basic Contact Form"]' ); ?>
	</div><!-- .container -->
</div><!-- .section -->
<?php }

function baindesign324_show_login() {
	get_template_part( 'header-preheader' );
}

function baindesign324_show_gallery() {
	get_template_part( 'modules/module-acf-gallery' );
}
function baindesign324_footer_logo() {
	get_template_part( 'components/logo_footer' );
}

function baindesign324_back_to_top() {
	get_template_part( 'components/back_to_top' );
}
function baindesign324_footer_nav() {
	get_template_part( 'modules/footer-nav' );
}
function baindesign324_mailchimp_form() {
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
	</div><!-- .section --> <?php
}
function baindesign324_latest_blog_posts() {
	get_template_part( 'modules/latest-posts_blog' );
}
function baindesign324_testimonials() {
	// get_template_part( 'modules/testimonials_slider' );
	get_template_part( 'modules/testimonials_static' );
}
function baindesign324_twitter_feed() {
	if ( get_theme_mod( 'baindesign324_twitter_feed_id' ) ) {
		get_template_part( 'modules/twitter-feed' );
	}
}

/**
 * Home
 */

function baindesign324_cover() {
	get_template_part( 'modules/cover' );
}

function baindesign324_site_intro() {
	# TODO
	# 1. 	Add this as a custom field rather than using the standard content editor
	#		Would allow instructions.
	# 2. 	Make this section conditional on the content.
	get_template_part( 'content-intro' ); 
}
function baindesign324_post_nav() {
	get_template_part( 'modules/post-nav' ); 
}

if ( ! function_exists( 'baindesign324_pre_content' ) ) :
	function baindesign324_pre_content() {
		if ( ! is_singular( 'testimonial' ) ) {
			baindesign324_cover();
		}
	}
endif;



/**
 * Order person achive results A-Z by last name
 */
function baindesign324_reorder_posts_person( $query ) {
    if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'cpt1' ) {          
        $query->set('orderby', 'meta_value');	
        $query->set('meta_key', 'last_name');	 
        $query->set('order', 'ASC');
    }
}
add_action( 'pre_get_posts', 'baindesign324_reorder_posts_person' );

/**
 * Generate page title by post type
 */
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

/**
 * Generate page subheader by post type
 */
if ( ! function_exists( 'baindesign324_page_subheader' ) ) :
	function baindesign324_page_subheader() {

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

/**
 * baindesign324_cover_top
 */

if ( ! function_exists( 'baindesign324_cover_top' ) ) :
	function baindesign324_cover_top() {
		// Do stuff
	}
endif;


/**
 * baindesign324_article_top
 */

if ( ! function_exists( 'baindesign324_article_header' ) ) :
	function baindesign324_article_header() { ?>		

		<h1 class="page-title"><?php echo get_the_title( ); ?></h1>
		<div class="post-author">By <?php echo get_the_author( ); ?></div>
		<div class="post-date"><?php the_date( ); ?></div>

	<?php }
endif;


/**
 * baindesign324_content_before
 */

if ( ! function_exists( 'baindesign324_content_before' ) ) :
	function baindesign324_content_before() {
		if ( get_post_type() == 'testimonial' ) {
			echo '<blockquote>';
		}
	}
endif;

/**
 * baindesign324_content_after
 */

if ( ! function_exists( 'baindesign324_content_after' ) ) :
	function baindesign324_content_after() {		
		if ( is_single( ) ) {
			
			baindesign324_post_tags();

		}
	}
endif;

/**
 * baindesign324_main_after
 */

if ( ! function_exists( 'baindesign324_main_after' ) ) :
	function baindesign324_main_after() {
		baindesign324_post_nav();
	}
endif;

/**
 * baindesign324_home_page_sections
 */
if ( ! function_exists( 'baindesign324_home_page_sections' ) ) :
	function baindesign324_home_page_sections() { 
		if( have_rows('home_page_sections') ):
			while ( have_rows( 'home_page_sections' ) ) : the_row();
				if( get_row_layout() == 'writing_section' ): 
					baindesign324_latest_blog_posts();
				elseif( get_row_layout() == 'appearances_section' ) :
					baindesign324_template_next_event();
				elseif( get_row_layout() == 'books_section' ) :
					baindesign324_featured_cpt_book();
				elseif( get_row_layout() == 'section_featured_article' ) :
					baindesign324_featured_cpt( 'article', '6' );				
				endif;
			endwhile;
		endif;
	}
endif;
/**
 * baindesign324_homepage_flex_content
 */

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

/**
 * Generate page subheader by post type
 */
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

/**
 * Homepage module featured clients
 */
function baindesign324_homepage_featured_clients() {
	get_template_part( 'modules/module-featured-clients' );
}

/**
 * Display linked posts (person_to_products)
 */
function baindesign324_person_to_products() {

	global $connected_person_module_title;
	global $connected_products_module_title; 
	$connected_type = 'person_to_products';
	$post_id = get_the_ID();
	$post_type = get_post_type( $post_id );

	if ( $post_type == 'cpt1' ) {
		$title = __( $connected_products_module_title, '_baindesign324' );
	}
	if ( $post_type == 'product' ) {
		$title = __( $connected_person_module_title, '_baindesign324' );
	}

		
	$connected_testimonials = new WP_Query( array( // Find connected pages
		'connected_type' => $connected_type,
		'connected_items' => get_queried_object(),
		'nopaging' => true,
		'post__not_in' => get_option("sticky_posts"),
	) ); 

	if ( $connected_testimonials->have_posts() ) : ?>
	<?php $count = $connected_testimonials->post_count; ?>
	<div id="connected" class="section">
		<div class="container_medium container ">
			<header>
				<h2 class="home-section-title"><?php echo $title; ?></h2>
			</header>
		</div><!-- .container_medium .container -->
		<div class="container media-object-container post-count-<?php echo $count; ?>">
			<?php while ( $connected_testimonials->have_posts() ) : $connected_testimonials->the_post(); ?>
	 			<?php get_template_part( 'content-archive' ); ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div><!-- .container_medium .container -->
	</div><!-- #connected ..section -->
<?php endif; 
}

function baindesign324_linked_people() {
	get_template_part( 'modules/linked-people' ); 
}

function prefix_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) && ! $depth ) {
        $item_output = str_replace( $args->link_after . '</a>', '<p class="menu-item-description">' . $item->description . '</p>' . $args->link_after . '</a>', $item_output );
    }
 
    return $item_output;
}
// add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );

/**
 * Woocommerce product meta
 */
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

/**
 * Testimonial meta
 */
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

/**
 * Featured Image
 */
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

add_filter( 'woocommerce_get_availability', 'custom_get_availability', 1, 2);

function custom_get_availability( $availability, $_product ) {
  global $product;
  $stock = $product->get_total_stock();

  if ( $_product->is_in_stock() ) $availability['availability'] = __($stock . ' places remaining', 'woocommerce');
  if ( !$_product->is_in_stock() ) $availability['availability'] = __('SOLD OUT', 'woocommerce');

  return $availability;
}

