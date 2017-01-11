<div class="post-list">

	<?php 
		/*
		* Custom query to display other recent items
		*
		*/
		global $post;
		$args=array(  
			'post__not_in' 		=> array($post->ID),  
			'post_type'			=> 'portfolio_item',
			'posts_per_page' 	=> 3

		);  
		$my_query = new wp_query( $args );
		// echo "<p>REQUEST:$wp_query->request</p>";
		while ( $my_query->have_posts() ):
		$my_query->the_post();

		// Cover images
		$thumb_id = get_post_thumbnail_id();
		$image_url = wp_get_attachment_image_src( $thumb_id,'golden', true);
		$default_image_url = get_stylesheet_directory_uri() . '/assets/images/default-golden.jpg';
 ?>
	?>


	<div class="post">
		
		
			<div class="image-wrapper">
				<a href="<?php the_permalink(); ?>">
					<?php if ( !empty( $image_url[0] ) ) : ?>
						<img src="<?php echo $image_url[0]; ?>">
					<?php else: ?>
						<img src="<?php echo $default_image_url[0]; ?>">
					<?php endif; ?>
				</a>
			</div>

	<article>
			<span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
			</article>
		</div><!-- .post -->
		<?php endwhile; ?>
		<?php 
			// Prevent weirdness
			wp_reset_postdata(); 
		?>

	</div>
