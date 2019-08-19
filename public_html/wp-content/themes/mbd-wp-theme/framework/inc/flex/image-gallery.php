<?php

/**
 * Gallery
 */

if ( ! function_exists( 'baindesign324_image_gallery' ) ) :
	function baindesign324_image_gallery() {

		// Vars
		$images = get_sub_field('image_gallery_content');
		$count = count( $images );



			if( $images ): ?>
			<div class="gallery__container gallery__images_<?php echo $count; ?>">
	        <?php foreach( $images as $image ):
	        	
	        	// There now follows a hacky way to link the image
	        	// anywhere by using the description
	        	if ( $image['description'] ) {
	        		$link = $image['description'];
	        	} else {	        		
	        		$link = $image['url'];
	        	}

	        	$caption = $image['caption'];
	        	$size = $image['sizes']['large'];
	        	$alt = $image['alt'];
	        	$title = $image['title'];

	        ?>
            	<figure>			            	
            	     <a href="<?php echo $link; ?>"><img src="<?php echo $size; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" /></a>			            	
          			<?php 
          				if ( $caption ) {
          					echo '<figcaption>' . $caption . '</figcaption>';
          				}
          			?>

            	</figure>			            
	        <?php endforeach; ?>
		</div>
	<?php endif;
}
endif;