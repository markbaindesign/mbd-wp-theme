<?php
/**
 * _mbbasetheme theme functions definted in /lib/init.php
 *
 * @package _mbbasetheme
 */


/**
 * Register Widget Areas
 */
function mb_widgets_init() {
	// Main Sidebar
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_mbbasetheme' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

}

/**
 * Remove Dashboard Meta Boxes
 */
function mb_remove_dashboard_widgets() {
	global $wp_meta_boxes;
	// unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

/**
 * Change Admin Menu Order
 */
function mb_custom_menu_order( $menu_ord ) {
	if ( !$menu_ord ) return true;
	return array(
		// 'index.php', // Dashboard
		// 'separator1', // First separator
		// 'edit.php?post_type=page', // Pages
		// 'edit.php', // Posts
		// 'upload.php', // Media
		// 'gf_edit_forms', // Gravity Forms
		// 'genesis', // Genesis
		// 'edit-comments.php', // Comments
		// 'separator2', // Second separator
		// 'themes.php', // Appearance
		// 'plugins.php', // Plugins
		// 'users.php', // Users
		// 'tools.php', // Tools
		// 'options-general.php', // Settings
		// 'separator-last', // Last separator
	);
}

/**
 * Hide Admin Areas that are not used
 */
function mb_remove_menu_pages() {
	// remove_menu_page( 'link-manager.php' );
}

/**
 * Remove default link for images
 */
function mb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	if ( $image_set !== 'none' ) {
		update_option( 'image_default_link_type', 'none' );
	}
}

/**
 * Show Kitchen Sink in WYSIWYG Editor
 */
function mb_unhide_kitchensink( $args ) {
	$args['wordpress_adv_hidden'] = false;
	return $args;
}

/**
 * Enqueue scripts
 */
function mbdmaster324_scripts() {
	
	global $wp_styles;

	// Load the main stylesheet
	wp_enqueue_style( 'mbdmaster324-style', get_stylesheet_directory_uri() . '/style.css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( !is_admin() ) {
		
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'masonry' );

		// Typekit script 
		// wp_enqueue_script( 'mbdmaster324-typekit', '//use.typekit.net/vfi6wgy.js');

		// Enqueue javascript plugins


		// Plugins
		
		wp_enqueue_script( 'mbdmaster324_modernizr', get_template_directory_uri() . '/assets/js/source/vendor/modernizr-latest.js', array(), '', TRUE );
		// wp_enqueue_script( 'mbdmaster324_wow', get_template_directory_uri() . '/assets/js/source/vendor/wow.js', array(), '', TRUE );
		wp_enqueue_script( 'mbdmaster324_responsivenav', get_template_directory_uri() . '/assets/js/source/vendor/responsive-nav.js', array(), '', TRUE );
		wp_enqueue_script( 'mbdmaster324_localscroll', get_template_directory_uri() . '/assets/js/source/vendor/jquery.localscroll-1.2.7-min.js', array(), '', TRUE );
		wp_enqueue_script( 'mbdmaster324_scrollto', get_template_directory_uri() . '/assets/js/source/vendor/jquery.scrollTo-1.4.3.1-min.js', array(), '', TRUE );
		wp_enqueue_script( 'mbdmaster324_fitvids', get_template_directory_uri() . '/assets/js/source/vendor/jquery.fitvids.js', array(), '', TRUE );
		wp_enqueue_script( 'mbdmaster324_matchheight', get_template_directory_uri() . '/assets/js/source/vendor/jquery.matchHeight-min.js', array(), '', TRUE );
		wp_enqueue_script( 'mbdmaster324_snapsvg', get_template_directory_uri() . '/assets/js/source/vendor/snap.svg-min.js', array(), '', TRUE );		
		wp_enqueue_script( 'mbdmaster324_svgicons_config', get_template_directory_uri() . '/assets/js/source/custom/custom-svgicons-config.js', array(), '', TRUE );
		wp_enqueue_script( 'mbdmaster324_svgicons', get_template_directory_uri() . '/assets/js/source/custom/custom-svgicons.js', array(), '', TRUE );		
		
		if ( is_front_page() ) {
			wp_enqueue_script( 'mbdmaster324_twitterfetcher', get_template_directory_uri() . '/assets/js/source/vendor/twitterFetcher.js', array(), '', TRUE );
			wp_enqueue_script( 'mbdmaster324_flexslider', '//cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.0/jquery.flexslider.min.js', array(), '', TRUE );
			wp_enqueue_script( 'mbdmaster324_flexslider', '//cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.0/jquery.flexslider.min.js', array(), '', TRUE );
			wp_enqueue_style( 'mbdmaster324_flexslider_styles', '//cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.0/flexslider.min.css', array(), '', TRUE );
		}

		// Custom scripts

		wp_enqueue_script( 'mbdmaster324_main', get_template_directory_uri() . '/assets/js/source/custom/main.js', array(), '', TRUE );
		
		if ( is_front_page() ) {
			wp_enqueue_script( 'mbdmaster324_tweetFetcher', get_template_directory_uri() . '/assets/js/source/custom/tweetFetcher.js', array(), '', TRUE );
			wp_enqueue_script( 'mbdmaster324_front', get_template_directory_uri() . '/assets/js/source/custom/front.js', array(), '', TRUE );
		}		

		
		
		if ( is_singular( 'portfolio_item' )) {
			// wp_enqueue_script( 'mbdmaster324_portfolio', get_template_directory_uri() . '/assets/js/source/custom/portfolio.js', array() );
		}

		// Localize SVGs
		$wnm_custom = array( 'stylesheet_directory_uri' => get_stylesheet_directory_uri() );
		wp_localize_script( 'mbdmaster324_svgicons_config', 'directory_uri', $wnm_custom );

		// Localize Twitter feed
		$mbdmaster_twitter_feed_id = get_theme_mod( 'mbdmaster_twitter_feed_id' );
		$twitter_feed_id = array(
			'twitter_id' => $mbdmaster_twitter_feed_id,
		);
		wp_localize_script( 'mbdmaster324_tweetFetcher', 'twitter_handle', $twitter_feed_id );

	}
}

/**
 * Add Typekit Webfonts Inline Script
 */	
function mbdmaster324_typekit_inline() {
	
	/* Conditionally loads the Typekit script inline if fonts are enqueued */
	
	if ( wp_script_is( 'mbdmaster324-typekit', 'done' ) ) { 
		echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>'; 
	}
}


/**
 * Remove Query Strings From Static Resources
 */
function mb_remove_script_version( $src ){
	$parts = explode( '?ver', $src );
	return $parts[0];
}

function mbdmaster_custom_media_sizes( $sizes ) {
    return array_merge( $sizes, array(
		  'two-cols' => __('Two Column Layout'),
		  'three-cols' => __('Three Column Layout'),
    ) );
 }

/**
 * Remove default <p> tag on images
 */
function mbdmaster_filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

/**
 * Remove Read More Jump
 */
function mb_remove_more_jump_link( $link ) {
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
function mbdmaster_body_classes( $classes ) {

	/*
	 * Since we used 'option' in add_setting arguments array
	 * we retrieve the value by using get_option function
	 */
	$mbdmaster_settings = get_option( 'mbdmaster_settings' );	
	
	$classes[] = $mbdmaster_settings['layout_setting'];

		if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) )
		$classes[] = 'slider';
	elseif ( is_front_page() )
		$classes[] = 'grid';

	// A custom class, just for the heck of it!
	$classes[] = 'mb-design'; 
	
	return $classes;

}	




/*
 * Add Featured Content functionality.
 *
 * To overwrite in a plugin, define your own Featured_Content class on or
 * before the 'setup_theme' hook.
 */
if ( ! class_exists( 'Featured_Content' ) && 'plugins.php' !== $GLOBALS['pagenow'] )
	require get_template_directory() . '/lib/inc/featured-content.php';


add_filter('oembed_dataparse','youtube_force_rel',10,3);
function youtube_force_rel($return, $data, $url) {
    if ($data->provider_name == 'YouTube') {
        return str_replace('feature=oembed', 'feature=oembed&#038;rel=0', $return);
    } else {
        return $return;
    }
}

/*if (class_exists('MultiPostThumbnails')) {
	$types = array(
		'post', 
		'page', 
		'work'
	);
	foreach($types as $type) {
	    new MultiPostThumbnails(
	        array(
	            'label' => 'Cover Image',
	            'id' => 'cover-image',
	            'post_type' => $type
			) 
		);
	}
}*/
/**
 * Remove default WordPress image sizes
 */
function mbdmaster_remove_default_image_sizes( $sizes) {
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