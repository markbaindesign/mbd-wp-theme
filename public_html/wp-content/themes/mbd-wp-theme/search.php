<?php get_header(); ?>
<?php do_action('baindesign324_main_before'); ?>
<main id="main">
	<?php do_action('baindesign324_primary_before'); ?>
	<div id="primary">
		<?php if (have_posts()) : ?>
			<div class="section posts-grid articles">
				<div class="container">
					<?php // Post title 
					?>
					<header class="posts__title page__title archive__title">
						<h1><?php _e('Search Results', 'bd324theme'); ?></h1>
						<?php echo bd324_get_pagination(); ?>
					</header>
					<div class="posts__wrapper">
						<?php while (have_posts()) : the_post(); ?>
							<?php get_template_part('content', 'archive'); ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		<?php else : ?>
			<?php get_template_part('content', 'no-content'); ?>
		<?php endif; ?>
	</div>
	<?php
	// This hook can be used to add a second
	// content section, e.g. a sidebar
	do_action('baindesign324_primary_after');
	?>
</main>
<?php do_action('baindesign324_main_after'); ?>
<?php get_footer(); ?>