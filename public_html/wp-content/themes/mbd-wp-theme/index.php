<?php 
	get_header();
	while ( have_posts() ) : the_post();
	do_action( 'baindesign324_main_before' );
	echo '<main id="main">';
	do_action( 'baindesign324_primary_before' );
	echo '<div id="primary">';
	do_action( 'baindesign324_article_before' );
	echo '<article id="post-'.get_the_ID().'" ';
	post_class();
	echo '>';
	do_action( 'baindesign324_article_top' );
	if( have_rows('home_page_flexible_content_sections') ):
		while ( have_rows('home_page_flexible_content_sections') ) : the_row();		    
			baindesign324_flexible_content();
		endwhile;
	else:
		baindesign324_content();
	endif;
	do_action( 'baindesign324_pre_comments' );

	do_action( 'baindesign324_article' );
	do_action( 'baindesign324_article_bottom' );
	echo '</article>';
	do_action( 'baindesign324_article_after' );
	echo '</div>';
	do_action( 'baindesign324_primary_after' );
	echo '</main>';
	do_action( 'baindesign324_main_after' );
	endwhile;
	get_footer();
?>
