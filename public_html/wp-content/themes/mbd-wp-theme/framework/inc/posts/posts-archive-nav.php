<?php

/**
 * Archive nav section
 */
if ( ! function_exists( 'baindesign324_archive_nav' ) ) :
	/**
	 * TO DO
	 * 
	 * This nav should only ever appear on archive pages
	 * Check first!
	 * 
	 * Work-around: hide it on posts, pages, etc
	 */
	function baindesign324_archive_nav() { ?>
	  <div class="section archive-nav">
	    <div class="container">
	      <?php baindesign324_paging_nav(); ?>
	    </div>
	  </div>      
	<?php }
endif;