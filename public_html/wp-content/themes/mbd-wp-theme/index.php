<?php 
	get_header();
	while ( have_posts() ) : the_post();
	do_action( 'baindesign324_main_before' );
	echo '<main id="main">';
	do_action( 'baindesign324_primary_before' );
	echo '<div id="primary">';
	do_action( 'baindesign324_article' );
	echo '</div>';
	do_action( 'baindesign324_primary_after' );
	echo '</main>';
	do_action( 'baindesign324_main_after' );
	endwhile;
	get_footer();
?>
