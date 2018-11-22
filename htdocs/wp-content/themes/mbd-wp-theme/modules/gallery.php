<?php 
	$images = get_sub_field('gallery_wide');
	$count = count( $images );

	// There now follows a hacky way to link the image
	// anywhere by using the description
	$link = $image['description'];

	if( $images ): ?>
		<div class="gallery">
			<div class="gallery__container gallery__images_<?php echo $count; ?>">
	        <?php foreach( $images as $image ): ?>
            	<figure>			            	
            	     <a href="<?php echo $link; ?>"><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?> title="<?php echo $image['title']; ?> /></a>			            	
          			<figcaption><?php echo $image['caption']; ?></figcaption>
            	</figure>			            
	        <?php endforeach; ?>
			</div>
		</div>
	<?php endif;
?>