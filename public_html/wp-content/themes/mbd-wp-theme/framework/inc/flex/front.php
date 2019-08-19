<?php

if ( ! function_exists( 'baindesign324_homepage_flex_content' ) ) :
	function baindesign324_homepage_flex_content() {
		if( have_rows('home_page_flexible_content_sections') ):
			while ( have_rows('home_page_flexible_content_sections') ) : the_row();

				if( get_row_layout() == 'image_gallery_section' ):
					$class = 'gallery gallery--front';
					baindesign324_generic_wrapper( $class );
					baindesign324_image_gallery();
					baindesign324_generic_wrapper( $class, 'close' );	
				
				elseif( get_row_layout() == 'media_block' ):
					$class = 'media-block media-block--front';
					baindesign324_generic_wrapper( $class );
					baindesign324_media_block();
					baindesign324_generic_wrapper( $class, 'close' );

				elseif( get_row_layout() == 'testimonials_layout' ):
					$class = 'testimonials testimonials--front';
					baindesign324_generic_wrapper( $class );
					baindesign324_display_testimonials();
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
					$class = 'gallery gallery--front';
					baindesign324_generic_wrapper( $class );
					get_template_part( 'modules/gallery' ); // TODO
					baindesign324_generic_wrapper( $class, 'close' );

				endif;
			endwhile;
		endif;
	}
endif;