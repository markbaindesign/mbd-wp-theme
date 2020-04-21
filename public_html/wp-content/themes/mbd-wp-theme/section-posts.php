<?php 
   /**
    * Latest Posts Section
    * 
    * Shows most recent posts in 
    */
    $classes = array('section--posts--latest', 'section--flex');
    baindesign324_generic_wrapper(NULL, $classes, NULL);
   // Vars
   $post_type  = 'post';
   $featured   = 3;
   bd324_show_latest_posts($post_type, $featured);
   // TO DO -.Get this from the flex content field
    baindesign324_generic_wrapper(NULL, NULL, 'close');