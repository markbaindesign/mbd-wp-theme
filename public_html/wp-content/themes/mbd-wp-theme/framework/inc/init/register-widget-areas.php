<?php

/**
 * Register widget areas
 * ---------------------
 * 
 * To appear in the WordPress dash, widgets also need to be added to
 * the widgets_init action (hooks-core.php)
 * 
 * To appear in the theme, the widgets need to be called with the 
 * dynamic_sidebar function.
 * 
 */

 // First Widget Area
if (!function_exists('baindesign324_register_widget_area_1')) :
   function baindesign324_register_widget_area_1()
   {
      register_sidebar(array(
         'name'          => 'Widget Area One',
         'id'            => 'widget_area_one',
         'description'   => 'First Widget Area',
         'before_widget' => '<div class="widget %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h4 class="widget__title">',
         'after_title'   => '</h4>',
      ));
   }
endif;

// Second Widget Area
if (!function_exists('baindesign324_register_widget_area_2')) :
   function baindesign324_register_widget_area_2()
   {
      register_sidebar(array(
         'name'          => 'Widget Area Two',
         'id'            => 'widget_area_two',
         'description'   => 'Second Widget Area',
         'before_widget' => '<div class="widget %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h4 class="widget__title">',
         'after_title'   => '</h4>',
      ));
   }
endif;

// Third Widget Area
if (!function_exists('baindesign324_register_widget_area_3')) :
   function baindesign324_register_widget_area_3()
   {
      register_sidebar(array(
         'name'          => 'Widget Area Three',
         'id'            => 'widget_area_three',
         'description'   => 'Third Widget Area',
         'before_widget' => '<div class="widget %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h4 class="widget__title">',
         'after_title'   => '</h4>',
      ));
   }
endif;

// Header Widget Area
if (!function_exists('baindesign324_register_widget_area_header')) :
   function baindesign324_register_widget_area_header()
   {
      register_sidebar(array(
         'name'          => 'Header Widget Area',
         'id'            => 'header_widget_area',
         'description'   => 'Header Widget Area',
         'before_widget' => '<div class="widget %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h4 class="widget__title">',
         'after_title'   => '</h4>',
      ));
   }
endif;

// Single Widget Area
if (!function_exists('baindesign324_register_widget_area_footer')) :
   function baindesign324_register_widget_area_footer()
   {
      register_sidebar(array(
         'name'          => 'Footer Widget Area',
         'id'            => 'footer_widget_area',
         'description'   => 'Footer Widget Area',
         'before_widget' => '<div class="widget %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h4 class="widget__title">',
         'after_title'   => '</h4>',
      ));
   }
endif;