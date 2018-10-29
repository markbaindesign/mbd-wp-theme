<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<?php do_action( 'baindesign_head' ); ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php do_action( 'baindesign_body_top' ); ?>
		<?php do_action( 'baindesign_after_opening_body_tag' ); ?>
		<div id="page" class="hfeed site">
			<?php do_action( 'baindesign_pre_header' ); ?>
			<?php do_action( 'baindesign324_header_top' ); ?>
			<?php do_action( 'baindesign324_header_bottom' ); ?>
			<?php do_action( 'baindesign_post_header' ); ?>
			<?php do_action( 'baindesign_pre_content' ); ?>
			<div id="content">
				<?php do_action( 'baindesign_content_top' ); ?>