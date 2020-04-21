<?php

/**
 * "Latest Post" query
 */

if (!function_exists('bd324_query_latest_posts')) :
   function bd324_query_latest_posts($post_type = 'post', $number_of_posts = '1')
   {
      // Allow latest posts to be displayed on a static page
      $paged = (get_query_var('page')) ? get_query_var('page') : 1;
      $args = array(
         'posts_per_page'  => $number_of_posts,
         'post_type'       => $post_type,
         'paged'           => $paged,
         'post_status'     => 'publish',
         'post__not_in'    => get_option('sticky_posts')
      );
      $query = new WP_Query($args);
      return $query;
   }
endif;

/**
 * Show default "Latest Post" section
 * 
 */
if (!function_exists('bd324_show_latest_posts')) :
   function bd324_show_latest_posts($post_type = 'post', $number_of_posts = '1')
   {
      /**
       * Run the query to see if we want to show this section
       */
      $query = bd324_query_latest_posts($post_type, $number_of_posts);
      if ($query->have_posts()) :
         // Latest Post section
         $classes = array(
            'posts-grid',
            'posts--latest',
            'posts--' . $number_of_posts,
            'posts--' . $post_type
         );
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo '<h1 class="posts__title">' . __('Latest', '_bd324theme') . '</h1>';
         echo '<div class="posts__wrapper posts__wrapper--featured posts__wrapper--post-count-' . $number_of_posts . '">';
         /** Now loop through the posts */
         while ($query->have_posts()) :
            $query->the_post();
            get_template_part('content', 'featured');
         endwhile;
         echo '</div>';
         baindesign324_generic_wrapper(NULL, NULL, 'close');
      endif;
      wp_reset_postdata();
   }
endif;

/**
 * Show a single, "chosen" post
 * 
 */
if (!function_exists('bd324_show_chosen_one_post')) :
   function bd324_show_chosen_one_post($post_type = 'post')
   {
      /**
       * Run the query to see if we want to show this section
       */
      $query = bd324_query_latest_posts($post_type, '1');
      if ($query->have_posts()) :
         // Latest Post section
         $classes = array(
            'posts-grid',
            'posts--latest',
            'posts--1',
            'posts--' . $post_type
         );
         baindesign324_generic_wrapper(NULL, $classes, NULL);
         echo '<h1 class="posts__title">' . __('Latest', '_bd324theme') . '</h1>';
         echo '<div class="posts__wrapper posts__wrapper--featured posts__wrapper--post-count-1">';
         /** Now loop through the posts */
         while ($query->have_posts()) :
            $query->the_post();
            get_template_part('content', 'chosen');
         endwhile;
         echo '</div>';
         baindesign324_generic_wrapper(NULL, NULL, 'close');
      endif;
      wp_reset_postdata();
   }
endif;

/**
 * "Non-latest" posts loop
 * 
 * Show posts not in the "latest" loop
 */
/*
 * Remove first post from loop/pagination
 * Note: some custom functions are required! 
 * [See theme-helpers.php]
 */

if (!function_exists('baindesign324_offset_query')) :
   function baindesign324_site_offset_query($post_type = 'post', $offset = 1)
   {

      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
         'offset'             => $offset,
         'paged'              => $paged,
         'post_type'          => $post_type,
         'post_status'        => 'publish',

         // We need to declare a special query
         // This fixes pagination issues
         'my_special_query'   => true
      );
      $query = new WP_Query($args);
      return $query;
   }
endif;

/**
 * "Non-latest Post" loop
 * 
 * Display the remaining posts, with the "featured" posts removed. 
 * 
 */

if (!function_exists('bd324_show_not_latest_posts')) :
   function bd324_show_not_latest_posts($post_type = 'post', $number_of_posts = '1')
   {
      $query = baindesign324_site_offset_query($post_type, $number_of_posts);

      if ($query->have_posts()) :
         // Latest Post section
         $section_classes = array(
            'posts-grid',
            'posts__latest--not',
            'posts--' . $post_type
         );
         baindesign324_generic_wrapper(NULL, $section_classes, NULL);
         echo '<header class="posts__title"><h2>' . __('More', '_bd324theme') . '</h2>';
         echo '</header>';
         echo '<div class="posts__wrapper">';
         while ($query->have_posts()) :
            $query->the_post();
            get_template_part('content', 'archive');
         endwhile;
         echo '</div>';
         baindesign324_generic_wrapper(NULL, NULL, 'close');
      endif;
      // wp_reset_postdata();
      
   }
endif;

// tell WordPress about our new query var
function wpse52480_query_vars( $query_vars ){
   $query_vars[] = 'my_special_query';
   return $query_vars;
}
add_filter( 'query_vars', 'wpse52480_query_vars' );

// check if our query var is set in any query
function wpse52480_pre_get_posts( $query ){
   if( isset( $query->query_vars['my_special_query'] ) )
       // do special stuff

   return $query;
}
add_action( 'pre_get_posts', 'wpse52480_pre_get_posts' );


add_action('pre_get_posts', 'mbdmaster_query_offset', 1 );
function mbdmaster_query_offset(&$query) {

   //Before anything else, make sure this is the right query...
  if( ! isset( $query->query_vars['my_special_query'] ) ) {
    return;
   }
 
   //First, define your desired offset...
   $offset = 1;
   
   //Next, determine how many posts per page you want (we'll use WordPress's settings)
   $ppp = get_option('posts_per_page');

   //Next, detect and handle pagination...
   if ( $query->is_paged ) {

       //Manually determine page query offset (offset + current page (minus one) x posts per page)
       $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );

       //Apply adjust page offset
       $query->set('offset', $page_offset );

   }
   else {

       //This is the first page. Just use the offset...
       $query->set('offset',$offset);

   }
}


add_filter('found_posts', 'mbdmaster_adjust_offset_pagination', 1, 2 );
function mbdmaster_adjust_offset_pagination($found_posts, $query) {

   //Define our offset again...
   $offset = 1;

   //Ensure we're modifying the right query object...
   if( isset( $query->query_vars['my_special_query'] ) ) {
       //Reduce WordPress's found_posts count by the offset... 
     return $found_posts - $offset;
   }
   return $found_posts;
}

// Work

// tell WordPress about our new query var
function mbdcptwork_query_vars( $query_vars ){
   $query_vars[] = 'my_special_cpt_query';
   return $query_vars;
}
add_filter( 'query_vars', 'mbdcptwork_query_vars' );

// check if our query var is set in any query
function mbdcptwork_pre_get_posts( $query ){
   if( isset( $query->query_vars['my_special_cpt_query'] ) )
       // do special stuff

   return $query;
}
add_action( 'pre_get_posts', 'mbdcptwork_pre_get_posts' );

function mbdmaster_cpt_query_offset(&$query) {

   //Before anything else, make sure this is the right query...
  if( ! isset( $query->query_vars['my_special_cpt_query'] ) ) {
    return;
   }
 
   //First, define your desired offset...
   $offset = 1;
   
   //Next, determine how many posts per page you want (we'll use WordPress's settings)
   $ppp = get_option('posts_per_page');

   //Next, detect and handle pagination...
   if ( $query->is_paged ) {

       //Manually determine page query offset (offset + current page (minus one) x posts per page)
       $page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );

       //Apply adjust page offset
       $query->set('offset', $page_offset );

   }
   else {

       //This is the first page. Just use the offset...
       $query->set('offset',$offset);

   }
}
add_action('pre_get_posts', 'mbdmaster_cpt_query_offset', 1 );

function mbdmaster_adjust_cpt_offset_pagination($found_posts, $query) {

   //Define our offset again...
   $offset = 1;

   //Ensure we're modifying the right query object...
   if( isset( $query->query_vars['my_special_cpt_query'] ) ) {
       //Reduce WordPress's found_posts count by the offset... 
     return $found_posts - $offset;
   }
   return $found_posts;
}
add_filter('found_posts', 'mbdmaster_adjust_cpt_offset_pagination', 1, 2 );