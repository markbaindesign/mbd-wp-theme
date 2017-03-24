<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', 'cover' ); ?>
	<main>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="section">
				<div class="container container_medium">
					<h1><?php the_title(); ?></h1>
				</div><!-- .container .container_medium-->
				<div class="container container_narrow">
					<?php if ( function_exists ( 'mbdmaster_posted_on' ) && ( in_array( get_post_type(), array( 'post' ) ) ) && ( ! has_term( 'type' ) ) ) : ?>
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 48 ); ?>
						<?php mbdmaster_posted_on(); ?>
					<?php endif; ?>
				</div><!-- .container-class .container -->
			</div><!-- #id .section-class .section -->

			<?php if( have_rows('post_elements') ): ?>
				<?php while ( have_rows('post_elements') ) : the_row(); ?>
				    <?php if( get_row_layout() == 'text_block' ): ?>
			        	<?php $content = get_sub_field('text'); ?>
		        		<div class="section text_block">
		        			<div class="container container_narrow">
		        				<?php echo $content; ?>
		        			</div><!-- .container -->
						</div><!-- .section -->
		        	<?php elseif( get_row_layout() == 'gallery_wide' ): ?>
		        		<?php get_template_part( 'modules/gallery' ); ?>
			        <?php endif; ?>
			    <?php endwhile; ?>
			<?php endif; ?>
			<?php if ( comments_open() || '0' != get_comments_number() ) :
				comments_template(); ?>
			<?php endif; ?>
		</article><!-- #post-<?php the_ID(); ?> -->
	</main><!-- #main -->
	<?php do_action( 'baindesign_single_main_after' ); ?>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>