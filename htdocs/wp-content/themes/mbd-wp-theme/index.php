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
	if( have_rows('post_elements') ):
		while ( have_rows('post_elements') ) : the_row();		    
			get_template_part( 'content', 'flexible' );
		endwhile;
	else:
		get_template_part( 'content');
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
