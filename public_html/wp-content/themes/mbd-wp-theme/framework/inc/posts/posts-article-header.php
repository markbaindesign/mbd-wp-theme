<?php

if ( ! function_exists( 'baindesign324_article_header' ) ) :
	function baindesign324_article_header() { ?>		

		<h1 class="page-title"><?php echo get_the_title( ); ?></h1>
		<div class="post-author">By <?php echo get_the_author( ); ?></div>
		<div class="post-date"><?php the_date( ); ?></div>

	<?php }
endif;