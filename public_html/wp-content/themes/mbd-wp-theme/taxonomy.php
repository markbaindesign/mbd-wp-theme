<?php

	$post_type = get_post_type();

	// Title
	$title = '';
	$archive_title_custom_field = $post_type . '_archive_title';
	$archive_title = get_field( $archive_title_custom_field, 'option' );
	
	if ( $archive_title ) {
		$title = $archive_title;
	} else {
		$title = the_archive_title();
	}

	// Do we have featured posts to show?	
	$featured_posts_custom_field = $post_type . '_featured_posts';
	$featured_posts = get_field( $featured_posts_custom_field, 'option' );

	// Featured post count
	// This would allow for a single featured post
	// or several
	// TODO adjust layout accordingly
	$featured_posts_count_custom_field = $post_type . '_number_of_featured_posts';
	$featured_posts_count = get_field( $featured_posts_count_custom_field, 'option' );
	if ( $featured_posts_count ) {
		$featured_posts_count = $featured_posts_count;
	} else {
		$featured_posts_count = '3';
	}
	
	// Non-featured posts title
	$section_title_posts_not_featured_custom_field = $post_type . '_section_title_posts_not_featured';
	$section_title_posts_not_featured = get_field( $section_title_posts_not_featured_custom_field, 'option' );

	// Non-featured post intro
	// TODO

	// Non-featured post count
	// TODO


	get_header();
?>
<div id="post-header" class="section">
	<div class="container">
			<?php
					echo '<h1 class="h2">';
					echo $title;
					echo '</h1>';
				?>
		<h1 class="page-title">
			<?php $term = get_term_by( 'slug', 
						get_query_var( 'term' ), 
						get_query_var( 'taxonomy' ) );
					echo $term->name; // will show the name of the term 
			?>
		</h1>

		<?php if ( baindesign324_archive_intro() ) {
			echo '<div class="intro">'.baindesign324_archive_intro().'</div>';
		} ?>

	</div><!-- .container -->
</div><!-- #intro .section -->	

<?php if ( have_posts() ) : ?>

	<div class="posts-section posts-not-featured section">
		<div class="container media-object-container">
			<?php while ( have_posts() ):
				the_post();
				baindesign324_template_content_archive();
			endwhile; ?>
		</div><!-- .container -->
	</div><!-- .section -->

	
<?php endif; ?>		

<?php get_footer();?>