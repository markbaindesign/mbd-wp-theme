<?php

if ( ! function_exists( 'baindesign324_homepage_flex_content' ) ) :
	function baindesign324_homepage_flex_content() { ?>
	
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
						<?php // baindesign324_enqueue_vendor_js_twitter_feed(); ?>

					<?php elseif( get_row_layout() == 'latest_blog_posts_layout' ): ?>
						<?php baindesign324_latest_blog_posts(); ?>
					
					<?php /* elseif( get_row_layout() == 'mailchimp_signup_form_layout' ):
						baindesign324_mailchimp_form(); */ ?>

					<?php elseif( get_row_layout() == 'gallery_wide' ): ?>
						<?php get_template_part( 'modules/gallery' ); ?>

					<?php endif; ?>

				<?php endwhile; ?>	
			<?php endif; ?>
	<?php }
endif;