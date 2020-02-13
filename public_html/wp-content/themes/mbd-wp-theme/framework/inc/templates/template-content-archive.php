<?php

/**
 * 
 */

if (!function_exists('baindesign324_template_content_archive')) :
	function baindesign324_template_content_archive($post_type = NULL)
	{
		// vars
		$id = get_the_ID();


		if ($post_type == 'teammembers') {
			bd_person_content($id);
		} else {
			$post_link = get_the_permalink();
			$thumb_id = get_post_thumbnail_id();
			$image_url_array = wp_get_attachment_image_src($thumb_id, 'latest_post', FALSE);
			$media_object_media_content = '';

			// Get the thumbnail
			if (get_field('book_image')) {
				$image_url_array = get_field('book_image');
				// print_r($image_url_array);
				$image_url = $image_url_array['url'];
			} elseif (has_post_thumbnail()) {
				$image_url = $image_url_array[0];
			} else {
				$image_url = '';
			}


			if ($image_url) {
				$media_object_media_content = '<div class="media-object-media match-height">';
				$media_object_media_content .= '<a href="' . $post_link . '">';
				$media_object_media_content .=	'<img src="' . $image_url . '" class="mobile-image">';
				$media_object_media_content .= '</a></div><!-- .media-object-media -->';
				$media_object_media_content .= '<article class="media-object-content match-height">';
			} else {
				$media_object_media_content .= '<article class="media-object-content" style="width: 100%;">';
			}
			echo $media_object_media_content;
			$post_title = get_the_title();

			$content = '';
			$content .= '<div class="entry-title">';
			if ($post_link) {
				$content .= '<a href="';
				$content .= $post_link;
				$content .= '" title="';
				$content .= $post_title;
				$content .= '"><span>';
			}
			$content .= $post_title;
			if ($post_link) {
				$content .= '</span></a>';
			}
			$content .= '</div>';
			echo $content;
			echo '<div class="post_excerpt">' . $post_excerpt . '</div>';
			baindesign324_page_external_links();
?>



			<footer class="read-more">
				<a href="<?php echo $post_link ?>" title="<?php _e('Go to', '_baindesign'); ?> <?php echo $post_title ?>">
					<span class=""><?php _e('Read more', '_baindesign'); ?> </span><i class="fa"></i>
				</a>

			</footer>
			</article><!-- .media-object-content -->
			</div><!-- .media-object -->



		<?php
		}
	}
endif;

/**
 * Person 
 */

if (!function_exists('bd_person_content')) : function bd_person_content($id)
	{
		$post_link = get_the_permalink($id);
		?>
		<article id="post-<?php echo $id; ?>" class="person">
			<?php bd324_cpt_person_image($id); ?>
			<section class="person__name">
				<a href="<?php echo $post_link; ?>">
					<span class="person__name__title"><?php the_field('person_title', $id); ?></span>
					<span class="person__name__first"><?php the_field('person_first_name', $id); ?></span>
					<span class="person__name__last"><?php the_field('person_last_name', $id); ?></span>
				</a>
			</section>
			<section class="person__meta">
				<div class="person__meta__role"><?php the_field('person_role', $id); ?></div>
				<div class="person__meta__company"><?php the_field('person_company', $id); ?></div>
				<div class="person__meta__link"><a href="<?php echo get_permalink($id); ?>">Link</a></div>
			</section>
		</article>
<?php }
endif;
