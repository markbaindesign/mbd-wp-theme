<?php
/**
 * Progress bar
 */

if ( ! function_exists( 'baindesign324_progress_bar' ) ) :
	function baindesign324_progress_bar() { ?>
		<progress value="0" id="progressBar">
		  <div class="progress-container">
		    <span class="progress-bar"></span>
		  </div>
		</progress>
	<?php  }
endif;