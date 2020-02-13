<?php
if ( ! function_exists( 'baindesign324_language_attributes' ) ) :
	function baindesign324_language_attributes( $output ) {
        /**
         * 
         * A bit of a hacky way to add classes to the HTML element
         * See https://wordpress.stackexchange.com/questions/19308/modernizr-and-wordpress-how-can-i-add-a-css-class-to-the-html-element
         */
        return $output . ' class="no-js"';
    }
endif;