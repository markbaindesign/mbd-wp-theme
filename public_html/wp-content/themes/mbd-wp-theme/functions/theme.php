<?php

/**
 * Overrule existing theme functions here. 
 */

use PostTypes\PostType;

// add_action('baindesign324_header_top', 'baindesign324_social_links', 60);
add_action('baindesign324_cover_top', 'bd324_archive_link', 60);
add_action('baindesign324_pre_colophon', 'bd324_main_cta', 10);

/* Related Products */
add_action('baindesign324_primary_after', 'bd324_related_products', 20);

/* Custom footer */
add_action('baindesign324_colophon', 'tsft324_site_info', 10);
add_action('baindesign324_colophon', 'baindesign324_back_to_top', 30);
add_action('baindesign324_colophon', 'baindesign324_social_links', 40);

/**
 * Disable all Woocommerce styles
 */
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

/**
 * Mailchimp Form
 */
function baindesign324_mailchimp_form1()
{ ?>
	<?php
	# TODO
	# 1. Add simple Mailchimp form
	# 2. Add ID from ACF options
	// Mailchimp Form
	?>
	<div class="form form__mailchimp">
		<header>
			<h3><?php _e('Get Updates', '_baindesign'); ?></h3>
		</header>
		<div id="mc_embed_signup">
			<?php // TO DO replace with value from options 
			?>
			<form action="https://theschoolfortraining.us4.list-manage.com/subscribe/post?u=b5fa071b5bd4fe2268aff865f&amp;id=a0f0b0989e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mailchimp" target="_blank" novalidate>
				<!--<div class="mc-field-group mc-field-group__first">
					<label for="mce-FNAME">First Name </label>
					<input type="text" value="" placeholder="Your First Name" name="FNAME" class="" id="mce-FNAME">
				</div>
				<div class="mc-field-group mc-field-group__last">
					<label for="mce-LNAME">Last Name </label>
					<input type="text" value="" placeholder="Your Last Name" name="LNAME" class="" id="mce-LNAME">
				</div>-->
				<div class="mc-field-group mc-field-group__email">
					<label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
					</label>
					<input type="email" value="" placeholder="Email address" name="EMAIL" class="required email" id="mce-EMAIL">
				</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;"><input type="text" name="b_e7958e37f3d67cd9c98e24f6c_7b25b42e09" tabindex="-1" value=""></div>
				<div class="clear">
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				</div>
			</form>
		</div>
		<!--End mc_embed_signup-->
		<footer><?php _e('You\'ll never get spam from me, and you can unsubscribe easily at any time.', '_baindesign'); ?></footer>
	</div>
<?php }

/**
 * Custom Related Products section
 */
function bd324_related_products()
{
	if (get_post_type() !== 'product') {
		return;
	}

	$classes = array(
		'products--related',
		'posts-grid',
		'products'
	);
	baindesign324_generic_wrapper(NULL, $classes, NULL);
	woocommerce_output_related_products();
	baindesign324_generic_wrapper(NULL, NULL, 'close');
}

/** Custom Woocommerce Notices Section */
function bd324_woo_notices_section()
{
	$classes = array('notices', 'notices--woocommerce');
	baindesign324_generic_wrapper(NULL, $classes, NULL);
	woocommerce_output_all_notices();
	baindesign324_generic_wrapper(NULL, NULL, 'close');
}
/**
 * Archive link
 */
function bd324_archive_link()
{
	$post_type = get_post_type();
	if ('teammembers' === $post_type) {
		baindesign324_cpt_archive_link('teammembers');
	} elseif ('post' === $post_type) {
		baindesign324_cpt_archive_link('post');
	} elseif ('product' === $post_type) {
		$backlink = '/courses';
		echo '<div class="archive-back-link">';
		echo '<a href="' . $backlink . '" title="See all courses &amp; seminars"/>';
		echo 'Back to courses &amp; seminars';
		echo '</a></div>';
	}
}

/**
 * Archive title
 */
function baindesign324_title_archive($post_type)
{
	if ('teammembers' === $post_type) {
		$archive_title = 'Team';
	} elseif ('product' === $post_type) {
		$archive_title = 'Courses &amp; Seminars';
	} elseif ('testimonial' === $post_type) {
		$archive_title = 'Testimonials';
	} else {
		$archive_title = get_the_archive_title();
	}
	$title = '<h1 class="posts__title page__title archive__title">' . $archive_title . '</h1>';
	return $title;
}

/**
 * Theme site info
 */
function tsft324_site_info()
{
	echo '<div class="site-info">';
	baindesign324_site_info_copyright();
	baindesign324_site_info_design_credit();
	echo '</div>';
}

/**
 * Main Call To Action
 */
function bd324_main_cta()
{
	$classes = array('cta', 'cta--main');
	baindesign324_generic_wrapper(NULL, $classes, NULL);
	echo '<a href="/courses">See our courses</a>';
	baindesign324_generic_wrapper(NULL, NULL, 'close');
}

/**
 * Branding
 */
function baindesign324_site_branding_title()
{
	// Vars
	$blog_title = get_bloginfo('name'); ?>

	<div class="site-branding">
		<div class="site-logo site-title">
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" title="<?php echo $blog_title; ?> | Home">
				<span class="branding-title">
					<img class="site-title__logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="<?php echo $blog_title; ?>">
				</span>
			</a>
		</div><!-- .site-branding -->
	</div><!-- .site-branding -->

<?php  }
/**
 * Enqueue stylesheets
 */
function tsft_enqueue_styles()
{
	if (!is_admin()) {

		// Vendor
		wp_enqueue_style('tsft-cookie-notice-styles',  '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css', array(), null);
	}
}
add_action('wp_enqueue_scripts', 'tsft_enqueue_styles', 99);

/**
 * Enqueue scripts
 */
function tsft_enqueue_scripts()
{
	if (!is_admin()) {

		// Vendor

		// Cookie Consent
		wp_enqueue_script('tsft-cookie-js', '//cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js', array(), null, TRUE);

		// Custom

		// Cookie Consent
		wp_enqueue_script('tsft-cookie-custom-js', get_stylesheet_directory_uri() . '/assets/js/source/custom/cookies-config.js', array(), null, TRUE);
	}
}
add_action('wp_enqueue_scripts', 'tsft_enqueue_scripts');

/**
 * Team CPT
 */

function baindesign324_register_cpt_team()
{

	$names = [
		'name' => 'Team Members',
		'singular' => __('Team Member'),
		'plural' => __('Team Members'),
		'slug' => __('team-members'),
	];
	$options = [
		'supports' 	=> array('title', 'editor', 'excerpt', 'thumbnail'),
		'has_archive' => true,
		'hierarchical' => false,
		'capability_type' => 'page',
		'show_in_menu' => true,
	];
	$content = new PostType($names, $options);
	$content->icon("dashicons-groups");
	$content->columns()->hide(['date']);
	$content->register();
}
add_action('after_setup_theme', 'baindesign324_register_cpt_team', 10);

// Article / Page / Post
function bd324_show_article_content()
{
	$id = 'post-' . get_the_ID();
	$classes = array('post', 'article');
	baindesign324_generic_wrapper(NULL, $classes, NULL);
	do_action('baindesign324_article_before');
	bd324_show_article_aside(); // Image
	bd324_show_article_header();

	echo '<section class="post__body">';
	do_action('baindesign324_content_before');
	baindesign324_content();
	echo '</section>';

	baindesign324_generic_wrapper(NULL, NULL, 'close');
}
add_action('baindesign324_article', 'bd324_show_article_content', 10);

// Article / Page / Post
function baindesign324_404_page()
{
	$id = 'post-' . get_the_ID();

	$content .= baindesign324_generic_wrapper();
	$content .= bd324_show_article_header();
	$content .= '<p>Not found</p>';

	$content .= baindesign324_generic_wrapper(NULL, NULL, 'close');
	return $content;
}

// Post header
// Plug existing framework function
// Add product price
// Remove author, date
function bd324_show_article_header()
{
	$id = get_the_ID();
	// Get the post type
	$post_type = get_post_type();
	echo '<header class="post__header">';
	echo baindesign324_post_title();

	// Show product price under header
	if ($post_type == 'product') {
		global $product;
		if (has_post_thumbnail($product->id)) {
			$attachment_ids[0] = get_post_thumbnail_id($product->id);
			$attachment = wp_get_attachment_image_src($attachment_ids[0], 'tsft-square');
			echo '<img src="'.$attachment[0].'">';
		}

		woocommerce_template_single_price();
	} elseif ($post_type == 'post') {
		echo '<div class="post__meta">';
		echo baindesign324_post_author();
		echo bd324_get_post_date();
		echo '</div>';
	}
	echo '</header>';
}

/**
 * Search bar
 */
function baindesign324_search_bar()
{
?>
	<div class="searchbar">

		<nav class="searchbar__form">
			<?php get_search_form(); ?>
		</nav>
	</div>
<?php
}


// Add image size
function baindesign324_custom_image_sizes()
{
	add_image_size('latest_post', 428, 285, true);
	add_image_size('tsft-square', 285, 285, true);
}

