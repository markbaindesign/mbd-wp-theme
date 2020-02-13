<?php

if (!function_exists('baindesign324_homepage_flex_content')) :
	function baindesign324_homepage_flex_content()
	{
		if (have_rows('home_page_flexible_content_sections')) :
			while (have_rows('home_page_flexible_content_sections')) : the_row();
				bd324_flex_content();
			endwhile;
		endif;
	}
endif;
