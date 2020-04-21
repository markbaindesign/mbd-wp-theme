<?php
   if ( !is_active_sidebar('widget_area_one') && !is_active_sidebar('widget_area_two') && !is_active_sidebar('widget_area_three') ) 
   {
      return;
   }
?>

<div id="widget-area" <?php baindesign324_footer_sidebar_class("section"); ?>>
   <div class="container">
      <?php if (is_active_sidebar('widget_area_one')) : ?>
         <div class="widget-container">
            <?php dynamic_sidebar('widget_area_one'); ?>
         </div>
      <?php endif; ?>
      <?php if (is_active_sidebar('widget_area_two')) : ?>
         <div class="widget-container">
            <?php dynamic_sidebar('widget_area_two'); ?>
         </div>
      <?php endif; ?>
      <?php if (is_active_sidebar('widget_area_three')) : ?>
         <div class="widget-container">
            <?php dynamic_sidebar('widget_area_three'); ?>
         </div>
      <?php endif; ?>
   </div>
</div>