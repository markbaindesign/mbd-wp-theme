<?php get_header();?>
<?php get_template_part('content', 'cover');?>
<div id="intro"class="section">
	<div class="container">
		<h1 class="h2 page-title">
			<?php 
				if ( is_post_type_archive( 'project' ) ) {
					_e( "Projects", '_mbdmaster');
				} elseif ( is_post_type_archive( 'book' ) ) {
					_e( "Books", '_mbdmaster');
				} elseif ( is_post_type_archive( 'talk' ) ) {
					_e( "Talks", '_mbdmaster');
				} elseif ( is_post_type_archive( 'workshop' ) ) {
					_e( "Workshops", '_mbdmaster');
				} elseif ( is_post_type_archive( 'interview' ) ) {
					_e( "Interviews", '_mbdmaster');
				} elseif ( is_post_type_archive( 'award' ) ) {
					_e( "Awards", '_mbdmaster');
				} elseif ( is_post_type_archive( 'film' ) ) {
					_e( "Films", '_mbdmaster');
				} else {
					the_archive_title();
				} 
			?>
		</h1>
		<?php
			// If there's a custom intro text, get it

		 	if ( is_post_type_archive( 'book' ) ) { 
			    if ( get_theme_mod( 'mbdmaster_book_archive_content', '' ) ) {
			      $content_url = get_theme_mod( 'mbdmaster_book_archive_content', '' );
			    }
			}  elseif ( is_post_type_archive( 'project' ) ) { 
			    if ( get_theme_mod( 'mbdmaster_project_archive_content', '' ) ) {
			      $content_url = get_theme_mod( 'mbdmaster_project_archive_content', '' );
			    }
			}  elseif ( is_post_type_archive( 'talk' ) ) { 
			    if ( get_theme_mod( 'mbdmaster_talk_archive_content', '' ) ) {
			      $content_url = get_theme_mod( 'mbdmaster_talk_archive_content', '' );
			    }
			}  elseif ( is_post_type_archive( 'workshop' ) ) { 
			    if ( get_theme_mod( 'mbdmaster_workshop_archive_content', '' ) ) {
			      $content_url = get_theme_mod( 'mbdmaster_workshop_archive_content', '' );
			    }
		    }  elseif ( is_post_type_archive( 'interview' ) ) { 
		        if ( get_theme_mod( 'mbdmaster_interview_archive_content', '' ) ) {
		          $content_url = get_theme_mod( 'mbdmaster_interview_archive_content', '' );
		        }
		    } elseif ( is_post_type_archive( 'award' ) ) { 
		        if ( get_theme_mod( 'mbdmaster_award_archive_content', '' ) ) {
		          $content_url = get_theme_mod( 'mbdmaster_award_archive_content', '' );
		        }
		    } elseif ( is_post_type_archive( 'film' ) ) { 
		        if ( get_theme_mod( 'mbdmaster_film_archive_content', '' ) ) {
		          $content_url = get_theme_mod( 'mbdmaster_film_archive_content', '' );
		        }
		    } else {
		    	$content_url = get_the_archive_description();
		    }

		    if ( $content_url ) {
		    	echo '<p class="intro h4">' . $content_url . '</p>';
		    } 

		?>
	</div><!-- .container -->
</div><!-- #intro .section -->	

<?php if ( have_posts() ) : ?>
	<div id="posts-grid-layout" class="section non-featured-posts">
		<div class="container">
			<div class="media-object-container masonrycontainer">
				<div class="grid-sizer"></div>
				<div class="gutter-sizer"></div>
				<?php while ( have_posts() ):
					the_post();
					get_template_part( 'content-archive');
				endwhile; ?>
			</div>
		</div><!-- .container -->
	</div><!-- .section -->
	<?php if ( function_exists( 'mbdmaster_paging_nav' ) ) {
		mbdmaster_paging_nav();
	} ?>
<?php endif; ?>		
<?php get_footer();?>