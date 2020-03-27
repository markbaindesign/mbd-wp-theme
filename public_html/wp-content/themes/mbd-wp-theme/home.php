<?php 
	/**
	 * Don't expect much here. It's all done with hooks & functions.
	 */

   get_header();
   
   // Vars
   $post_type  = 'post';
   $featured   = 1;
   bd324_show_latest_posts($post_type, $featured);
   bd324_show_not_latest_posts($post_type, $featured);
	// do_action( 'baindesign324_blog_archive_page' );
	get_footer(); 