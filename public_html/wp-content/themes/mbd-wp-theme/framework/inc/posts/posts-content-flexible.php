<?php

/**
 * Display flexible content for posts & pages (Legacy)
 */

if (!function_exists('baindesign324_flexible_content')) :
	function baindesign324_flexible_content()
	{ ?>
		<?php if (get_row_layout() == 'text_block') : ?>
			<?php $content = get_sub_field('text'); ?>
			<div class="content content--text">
				<?php echo $content; ?>
			</div>
<?php
		elseif (get_row_layout() == 'image_gallery_section') :
			baindesign324_image_gallery();
		elseif (get_row_layout() == 'blockquote') : // TODO
			baindesign324_blockquote();
		endif;
	}
endif;

/**
 * Display flexible content
 */

if (!function_exists('bd324_flex_content')) :
	function bd324_flex_content()
	{
		if (get_row_layout() == 'image_gallery_section') :
			$classes[] = 'gallery, gallery--front';
			baindesign324_generic_wrapper(NULL, $classes, NULL);
			baindesign324_image_gallery();
			baindesign324_generic_wrapper(NULL, NULL, 'close');

		elseif (get_row_layout() == 'media_block') :
			baindesign324_media_block();

		elseif (get_row_layout() == 'testimonials_layout') :
			$classes[] = 'testimonials, testimonials--front';
			baindesign324_generic_wrapper(NULL, $classes, NULL);
			bd324_get_testimonials();
			baindesign324_generic_wrapper(NULL, NULL, 'close');

		elseif (get_row_layout() == 'twitter_feed_layout') :
			$classes[] = 'feed, feed--twitter, feed--twitter--front';
			baindesign324_generic_wrapper(NULL, $classes, NULL);
			baindesign324_display_twitter_feed('front');
			baindesign324_generic_wrapper(NULL, NULL, 'close');

		elseif (get_row_layout() == 'latest_blog_posts_layout') :
			$classes[] = 'posts, posts--latest, posts--latest--front';
			baindesign324_generic_wrapper(NULL, $classes, NULL);
			baindesign324_latest_blog_posts();
			baindesign324_generic_wrapper(NULL, NULL, 'close');

		elseif (get_row_layout() == 'mailchimp_signup_form_layout') :
			$classes[] = 'form, form--mailchimp, form--mailchimp--front';
			baindesign324_generic_wrapper(NULL, $classes, NULL);
			baindesign324_mailchimp_form();
			baindesign324_generic_wrapper(NULL, NULL, 'close');

		elseif (get_row_layout() == 'gallery_wide') :
			$classes[] = 'gallery, gallery--front';
			baindesign324_generic_wrapper(NULL, $classes, NULL);
			get_template_part('modules/gallery'); // TODO
			baindesign324_generic_wrapper(NULL, NULL, 'close');
		endif;
	}
endif;
