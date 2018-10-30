<?php
if ( ! function_exists( 'baindesign324_head_content' ) ) :
	function baindesign324_head_content() { ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<style type="text/css">.js #flash {display: none;}</style>
		<script type="text/javascript">document.documentElement.className = 'js';</script>
	<?php }
endif;