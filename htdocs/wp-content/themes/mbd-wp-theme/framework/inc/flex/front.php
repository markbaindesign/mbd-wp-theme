<?php

if ( ! function_exists( 'baindesign324_homepage_flex_content' ) ) :
	function baindesign324_homepage_flex_content() {
		if( have_rows('home_page_flexible_content_sections') ):
			while ( have_rows('home_page_flexible_content_sections') ) : the_row();
				if( get_row_layout() == 'image_gallery_section' ):
					$class = 'carousel carousel--testimonials carousel--testimonials--front';
					baindesign324_generic_wrapper( $class );
					baindesign324_image_gallery();
					baindesign324_generic_wrapper( $class, 'close' );	
				
				elseif( get_row_layout() == 'media_block' ):
					$class = 'carousel carousel--testimonials carousel--testimonials--front';
					baindesign324_generic_wrapper( $class );
					baindesign324_media_block();
					baindesign324_generic_wrapper( $class, 'close' );

				// Repeater Media Blocks Section
				elseif( get_row_layout() == 'repeater_media_blocks_section' ):
					$class = 'carousel carousel--testimonials carousel--testimonials--front';
					baindesign324_generic_wrapper( $class );
					baindesign324_media_block();
					baindesign324_generic_wrapper( $class, 'close' );

				elseif( get_row_layout() == 'testimonials_layout' ):
					$class = 'carousel carousel--testimonials carousel--testimonials--front';
					baindesign324_generic_wrapper( $class );
					baindesign324_testimonials();
					baindesign324_generic_wrapper( $class, 'close' );						
				elseif( get_row_layout() == 'twitter_feed_layout' ):
					$class = 'feed feed--twitter feed--twitter--front';
					baindesign324_generic_wrapper( $class );
					baindesign324_display_twitter_feed( 'front' );
					baindesign324_generic_wrapper( $class, 'close' );						
				elseif( get_row_layout() == 'latest_blog_posts_layout' ):						
					$class = 'posts posts--latest posts--latest--front';
					baindesign324_generic_wrapper( $class );
					baindesign324_latest_blog_posts();
					baindesign324_generic_wrapper( $class, 'close' );
				elseif( get_row_layout() == 'mailchimp_signup_form_layout' ):
					$class = 'form form--mailchimp form--mailchimp--front';
					baindesign324_generic_wrapper( $class );
					baindesign324_mailchimp_form();
					baindesign324_generic_wrapper( $class, 'close' );
				elseif( get_row_layout() == 'gallery_wide' ):
					$class = 'form form--mailchimp form--mailchimp--front';
					baindesign324_generic_wrapper( $class );
					baindesign324_mailchimp_form();
					baindesign324_generic_wrapper( $class, 'close' );
					get_template_part( 'modules/gallery' );
				endif;
			endwhile;
		endif;
	}
endif;