<?php
/**
 * Site favicons
 */

if ( ! function_exists( 'baindesign324_head' ) ) :
	function baindesign324_head() {  ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>
			<?php wp_title( '|', true, 'right' ); ?>
		</title>

		<meta name="theme-color" content="#ffffff">

		<style type="text/css">
		  .js #flash {display: none;}
		</style>
		<script type="text/javascript">
		  document.documentElement.className = 'js';
		</script>
	<?php }
endif;