<?php

if ( ! function_exists( 'baindesign324_featured_post' ) ) :
	function baindesign324_featured_post() { 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;  
		if( 1 == $paged ) {?>
	    	<div class="media-object-container full-width">
	    		<?php baindesign324_content_latest_post(); ?>
	    	</div>
		<?php }
	}
endif;
/* 
 * To display the remainder of the posts, use the offset post loop function
 * 
 */