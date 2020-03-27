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
         echo '<h1 class="posts__title">' . __('Latest news', '_bd324theme') . '</h1>';
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
         'paged'              => $paged,
         'post_status'        => 'publish',
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
         echo '<header class="posts__title"><h2>' . __('More news', '_bd324theme') . '</h2>';
         echo bd324_get_pagination();
         echo '</header>';
         echo '<div class="posts__wrapper">';
         while ($query->have_posts()) :
            $query->the_post();
            get_template_part('content', 'archive');
         endwhile;
         echo '</div>';
         baindesign324_generic_wrapper(NULL, NULL, 'close');
      endif;
      wp_reset_postdata();
   }
endif;
