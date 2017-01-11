<?php get_header(); ?>

<!-- Hero -->
<?php get_template_part( 'content', 'cover-front' ); ?>

<!-- Intro Section -->
<?php
	# TODO
	# 1. 	Add this as a custom field rather than using the standard content editor
	#		Would allow instructions.
	# 2. 	Make this section conditional on the content.

	/*
	if ( get_template_part( 'content-front-page-intro' ) ) { 
		get_template_part( 'content-front-page-intro' );
	} */
?>

<!-- Latest Posts (Work CPT) -->
<?php 
	/*
		if ( get_template_part( 'modules/module', 'categories-grid' ) ) { 
			get_template_part( 'modules/module', 'categories-grid' );
		}
	*/
?>

<!-- Latest Posts -->
<?php if ( 
	get_template_part( 'modules/module', 'latest-posts' ) ) { 
		get_template_part( 'modules/module', 'latest-posts' );
	}
?>

<!-- Logo Gallery -->
<?php if ( 
	get_template_part( 'modules/module-acf-gallery' ) ) { 
		get_template_part( 'modules/module-acf-gallery' );
	}
?>

<!-- Testimonials -->
<?php if ( 
	get_template_part( 'modules/module-slider-testimonials' ) ) { 
		get_template_part( 'modules/module-slider-testimonials' );
	}
?>

<!-- MailChimp Form -->
<?php
	# TODO
	# 1. Add Mailchimp ID via Customizer a la Twitter Feed
	# 2. Make this section conditional on the Mailchimp ID 

	if ( get_template_part( 'modules/module', 'mailchimp-form' ) ) { 
		get_template_part( 'modules/module', 'mailchimp-form' );
	}
?>

<!-- Twitter Feed -->
<?php 
	# TODO
	# 1. Make this section conditional on the Twitter ID

	/* if ( 
	 get_template_part( 'modules/module', 'twitter-feed' ) ) { 
		get_template_part( 'modules/module', 'twitter-feed' );
	} */
?>

<?php get_footer(); ?>