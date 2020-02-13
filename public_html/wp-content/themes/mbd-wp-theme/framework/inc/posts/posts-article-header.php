<?php

// TO DO
// Rename this to "post meta" and add tags, categories, etc

// Post Title
if (!function_exists('baindesign324_post_title')) :
	function baindesign324_post_title()
	{
		$post_title = get_the_title();
		$content = '<h1 class="post__title">' . $post_title . '</h1>';
		echo $content;
	}
endif;

// Post Author
if (!function_exists('baindesign324_post_author')) :
	function baindesign324_post_author()
	{ ?>
		<div class="post__author"><span>By <span><?php echo get_the_author(); ?></div>
<?php }
endif;


// Post Date
if (!function_exists('bd324_get_post_date')) :
	function bd324_get_post_date()
	{
		$content = '<div class="post__date"><span>';
		$content .= __('Published on', '_baindesign');
		$content .= '<span>';
		$content .= get_the_date();
		$content .= '</div>';

		return $content;
	}
endif;
