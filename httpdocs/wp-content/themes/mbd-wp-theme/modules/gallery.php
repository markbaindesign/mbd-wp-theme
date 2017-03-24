<div class="section gallery_wide">
	<div class="container">
		<?php 
		$images = get_sub_field('gallery_wide');
		if( $images ): ?>
		    <ul class="no-bullets">
		        <?php foreach( $images as $image ): ?>
		            <li>
		                <a href="<?php echo $image['description']; ?>">
		                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?> title="<?php echo $image['title']; ?> />
		                </a>
		                <p><?php echo $image['caption']; ?></p>
		            </li>
		        <?php endforeach; ?>
		    </ul>
		<?php endif; ?>
	</div><!-- .container -->
</div><!-- .section -->