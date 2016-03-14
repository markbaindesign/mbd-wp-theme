<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<h1 class="h2"><?php the_title(); ?></h1>
		<?php if ( function_exists ( 'mbdmaster_posted_on' ) && ( in_array( get_post_type(), array( 'post', 'work' ) ) ) && ( !has_term( 'book', 'type' ) ) ) {
			echo '<div class="post-meta">';
			echo get_avatar( get_the_author_meta( 'ID' ), 40 ); 
			mbdmaster_posted_on();
			echo '</div>';
		} ?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_mbbasetheme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->	
</article><!-- #post-## -->
<div id="social-sharing">
	<?php if ( function_exists( 'mbdmaster_social_sharing' ) ) {
		mbdmaster_social_sharing(); 
	} ?>
</div><!-- .section -->