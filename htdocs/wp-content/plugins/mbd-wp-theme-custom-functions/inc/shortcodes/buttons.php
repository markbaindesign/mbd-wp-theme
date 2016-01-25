<?php

/**
 * Some buttons
 * 
 */
function mbdmaster324_buttons_shortcode($atts) {
	
	extract(shortcode_atts(array(
		'label' 	=> 'Click here',
		'link' 		=> '#',
		'title' 	=> 'Click here', // A title for the button
		'size' 		=> 'button-default', // Adds a class to the button
	), $atts));
		
	ob_start();

	if ( isset( $atts["size"] )) { // User-input value
		// Get shortcode $atts
		$button_class = $atts["size"];
	}

	$output  = '<a href="';
	$output .= $link;
	$output .= '" title="';
	$output .= $title;
	$output .= '" class="button ';
	$output .= $size;
	$output .= '">';
	$output .= $label;
	$output .= '</a>';

	return $output;			

	$content =  ob_get_contents();
  	ob_clean();

  	return $content; 

}

add_shortcode('button', 'mbdmaster324_buttons_shortcode');