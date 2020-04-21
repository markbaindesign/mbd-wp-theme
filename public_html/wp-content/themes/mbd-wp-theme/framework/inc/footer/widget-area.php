<?php

/** 
 * Single Widget Area, Multiple Widgets in Columns
 */
if (!function_exists('baindesign324_footer_sidebar')) :
   function baindesign324_footer_sidebar()
   {
      if (!is_active_sidebar('footer_widget_area')){
         return;
      }
      /** Add classes */
      $count = bd324_count_active_widgets('footer_widget_area');
      $number_widgets = 'widgets--' . $count;
      $classes = array('section', 'widgets', 'widget__area--footer', $number_widgets);
      $output = implode($classes, ' ');
?>
      <div id="widget-area" class="<?php echo $output; ?>">
         <div class="container">
            <?php dynamic_sidebar('footer_widget_area'); ?>
         </div>
      </div>
<?php }
endif;

/** 
 * Single Widget Area with Multiple Widgets in Columns
 */
if (!function_exists('baindesign324_widget_area_pre_content')) :
   function baindesign324_widget_area_pre_content()
   {
      if (!is_active_sidebar('header_widget_area')){
         return;
      }

      $count = bd324_count_active_widgets( 'header_widget_area' );
      $classes = array( 'section--widget-areas', 'widget-areas', 'widget-area--pre-content','widget-areas--' . $count );

      // Open wrapper
      baindesign324_generic_wrapper(NULL, $classes, NULL);

      dynamic_sidebar('header_widget_area');

      // Close the section wrapper
      baindesign324_generic_wrapper(NULL, NULL, 'close');
   }
endif;

/**
 * Widget Area Layout (Multiple Widget Areas)
 */
if (!function_exists('baindesign324_footer_sidebars')) :
   function baindesign324_footer_sidebars()
{
   if (  !is_active_sidebar('widget_area_one') && 
         !is_active_sidebar('widget_area_two') && 
         !is_active_sidebar('widget_area_three') 
      ) 
   {
      return;
   }

   $count = bd324_count_active_widget_areas();
   $classes = array( 'section--widget-areas', 'widget-areas', 'widget-areas--' . $count );
   
   // Open the section wrapper
	baindesign324_generic_wrapper(NULL, $classes, NULL);

   // Define our widget areas array
   $areas = array(
      'widget_area_one',
      'widget_area_two',
      'widget_area_three'
   );

   // Output a widget area for each active sidebar
   foreach( $areas as $area ){
      if ( is_active_sidebar( $area ) ) {
         echo '<div class="widget-container">';
         dynamic_sidebar( $area );
         echo '</div>';
      }
   }

   // Close the section wrapper
   baindesign324_generic_wrapper(NULL, NULL, 'close');
}
endif;

/**
 * Count Active Footer/Sidebar Widget Areas
 */
if (!function_exists('bd324_count_active_widget_areas')) :
   function bd324_count_active_widget_areas()
   {
      $count = 0;
   
      // Add to count if sidebar is active
      if (is_active_sidebar('widget_area_one')) {
         $count++;
      }
      if (is_active_sidebar('widget_area_two')) {
         $count++;
      }
      if (is_active_sidebar('widget_area_three')) {
         $count++;
      }

      return $count;
   }
endif;

/**
 * Count Active Widgets in Widget Area
 */
if (!function_exists('bd324_count_active_widgets')) :
   function bd324_count_active_widgets( $area )
   {
      $count = 0;
   
      $the_sidebars = wp_get_sidebars_widgets();
      $count = count($the_sidebars[ $area ]);

      return $count;
   }
endif;
