<?php

/**
 * CPT Archive Backlink
 *
 * A useful little function to provide a link back to the main archive of
 * a post type. Use it in taxonomy archives, single posts, navigation...
 */

if (!function_exists('baindesign324_cpt_archive_link')) :

   function baindesign324_cpt_archive_link($post_type)
   {
      $backlink = get_post_type_archive_link($post_type);
      $obj = get_post_type_object($post_type);
      $term = get_term_by(
         'slug',
         get_query_var('term'),
         get_query_var('taxonomy')
      );
      echo '<div class="archive-back-link">';
      echo '<a href="' . $backlink . '" title="See all ' . $obj->labels->name . '"/>';
      echo $obj->labels->name;
      echo '</a></div>';
   }

endif;
