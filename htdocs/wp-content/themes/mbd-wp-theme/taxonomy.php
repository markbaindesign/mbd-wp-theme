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

	// Post date
	// Get the custom post date for ordering the query, if present
	// TODO Change the custom field to a standard variable name, e.g. $custom_post_date

	$post_date = '';
	
	if ( is_post_type_archive( 'testimonial' ) ) {
		$post_date = 'testimonial_date'; 
	} elseif ( is_post_type_archive( 'book' ) ) {
		$post_date = 'book_date'; 
	} elseif ( is_post_type_archive( 'talk' ) ) {
		$post_date = 'event_date'; 
	} elseif ( is_post_type_archive( 'project' ) ) {
		$post_date = 'project_date'; 
	} elseif ( is_post_type_archive( 'article' ) ) {
		$post_date = 'article_date';
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

		<?php
			$intro = '';
			if ( is_post_type_archive( 'testimonial' ) ) {
				if ( get_field( 'testimonial_archive_intro', 'option' ) ) {
					$intro = get_field( 'testimonial_archive_intro', 'option' );
				} else {
					$intro = get_the_archive_description();
				} 	 
			} elseif ( is_post_type_archive( 'book' ) ) {
				if ( get_field( 'book_archive_intro', 'option' ) ) {
					$intro = get_field( 'book_archive_intro', 'option' );
				} else {
					$intro = get_the_archive_description();
				} 	 
			} elseif ( is_post_type_archive( 'talk' ) ) {
				if ( get_field( 'talk_archive_intro', 'option' ) ) {
					$intro = get_field( 'talk_archive_intro', 'option' );
				} else {
					$intro = get_the_archive_description();
				} 	 
			} elseif ( is_post_type_archive( 'project' ) ) {
				if ( get_field( 'project_archive_intro', 'option' ) ) {
					$intro = get_field( 'project_archive_intro', 'option' );
				} else {
					$intro = get_the_archive_description();
				} 	 
			} elseif ( is_post_type_archive( 'article' ) ) {
				if ( get_field( 'article_archive_intro', 'option' ) ) {
					$intro = get_field( 'article_archive_intro', 'option' );
				} else {
					$intro = get_the_archive_description();
				} 
			} else {
				$intro = get_the_archive_description();
			} 

		   	if ( $intro ) {
		    	echo '<div class="intro">' . $intro . '</div>';
		    }
		?>
	</div><!-- .container -->
</div><!-- #intro .section -->	

<?php if ( have_posts() ) : ?>

	<div class="posts-section posts-not-featured section">
		<div class="container media-object-container">
			<?php while ( have_posts() ):
				the_post();
				get_template_part( 'content-archive');
			endwhile; ?>
		</div><!-- .container -->
	</div><!-- .section -->

	
<?php endif; ?>		

<?php get_footer();?>