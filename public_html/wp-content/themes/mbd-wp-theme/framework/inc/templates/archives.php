<?php

/**
 * 
 */

if ( ! function_exists( 'baindesign324_template_archive_main' ) ) :
	function baindesign324_template_archive_main() {
      $post_type = get_post_type();

      // Open the content div
      baindesign324_generic_wrapper();

      echo baindesign324_title_archive( $post_type );
      echo '<div class="posts__wrapper">';

      // Loop the posts
      if ( have_posts() ) : 
         while ( have_posts() ) : the_post();
            baindesign324_template_content_archive( $post_type);
         endwhile;
      else:
         echo 'no posts found';
      endif;

      echo '</div>';
      baindesign324_generic_wrapper(NULL, NULL, 'close');
   }
endif;

if ( ! function_exists( 'bd324_archive_content_temp' ) ) :
	function bd324_archive_content_temp() {
      $post_type = get_post_type();

      // Do we have featured posts to show?	
      $featured_posts_custom_field = $post_type . '_featured_posts';
      $featured_posts = get_field( $featured_posts_custom_field, 'option' );
   
      // Featured post count
      // This would allow for a single featured post
      // or several
      // TODO adjust layout accordingly
      $featured_posts_count_custom_field = $post_type . '_number_of_featured_posts';
      $featured_posts_count = get_field( $featured_posts_count_custom_field, 'option' );
      if ( $featured_posts_count ) {
         $featured_posts_count = $featured_posts_count;
      } else {
         $featured_posts_count = '3';
      }
      
      // Non-featured posts title
      $section_title_posts_not_featured_custom_field = $post_type . '_section_title_posts_not_featured';
      $section_title_posts_not_featured = get_field( $section_title_posts_not_featured_custom_field, 'option' );
   
      // Non-featured post intro
      // TODO
   
      // Non-featured post count
      // TODO

   ?>
   <div id="post-header" class="section">
      <div class="container">
         <h1 class="page-title">
            <?php echo baindesign324_title_archive($post_type); ?>
         </h1>
   
         <?php if ( baindesign324_archive_intro($post_type) ) {
            echo '<div class="intro">'.baindesign324_archive_intro($post_type).'</div>';
         } ?>
   
      </div><!-- .container -->
   </div><!-- #intro .section -->	
   
   <?php if ( have_posts() ) : ?>
      <?php if ( $featured_posts == TRUE ) : ?>
         <?php 
            $args = array(
               'posts_per_page'=> $featured_posts_count,
               'post_type'		=> $post_type,
               'meta_key'   	=> $post_date,
               'orderby'    	=> 'meta_value_num',
               'order'			=> 'DESC',
               'meta_query'	=> array(
                  array(
                      'key' => $post_type . '_featured',
                      'compare' => '==',
                      'value'   => '1',
                  ),
               ),
            );
   
            // query
            $the_query = new WP_Query( $args );
   
   
            if ( $the_query->have_posts() ) : ?>
   
            <div class="posts-section posts-featured section">
               <div class="container media-object-container">
                  <?php while ( $the_query->have_posts() ):
                     $the_query->the_post();
                     get_template_part('content', 'archive');
                  endwhile; ?>
               </div><!-- .container -->
            </div><!-- .section -->
   
            
         <?php endif; ?>		
         <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
   
         <?php if ( is_post_type_archive( 'article' ) ) : ?>
            <?php 
               $section_title = 'Publications';
                $section_term = 'publication';
            ?>
   
            <div id="post-type-terms" class="section">
               <div class="container">
                  <h2 class="section-title">
                     <?php echo $section_title; ?>
                  </h2>
                  <?php baindesign324_show_all_terms( $section_term ); ?>  
               </div><!-- .container -->
            </div><!-- #publications .section -->
   
         <?php endif; ?>		
               
         <?php 
            $args = array(
               'posts_per_page'=> -1,
               'post_type'		=> $post_type,
               'meta_key'   	=> $post_date,
               'orderby'    	=> 'meta_value_num',
               'order'			=> 'DESC',
               'meta_query'	=> array(
                  array(
                      'key' => $post_type . '_featured',
                      'compare' => '==',
                      'value'   => '0',
                  ),
               ),
            );
   
            // query
            $the_query = new WP_Query( $args );
   
   
            if ( $the_query->have_posts() ) : ?>
            <div class="posts-section posts-not-featured section">
               <div class="container">
               <h2 class="section-title">
                  <?php
                     $title = '';
                     if ( $section_title_posts_not_featured ) {
                        $title = $section_title_posts_not_featured;
                     }
                     echo $title;
                  ?>
               </h2>
   
               <?php
                  $intro = '';
                  if ( get_field( 'project_past_clients_section_intro', 'option' ) ) {
                     $intro = get_field( 'project_past_clients_section_intro', 'option' );
                     echo '<div class="intro intro-section">' . $intro . '</div>';
                  } 
               ?>
            </div><!-- .container -->
               <div class="container media-object-container">
                  <?php while ( $the_query->have_posts() ):
                     $the_query->the_post();
                     get_template_part('content', 'archive');
                  endwhile; ?>
               </div><!-- .container -->
            </div><!-- .section -->
            
         <?php endif; ?>		
         <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
      
      <?php else:
         // No featured posts
         // Standard loop 
      ?>
   
         <?php if ( have_posts() ) : ?>	
            <div id="posts-layout" class="section posts">
               <div class="container posts__container">
                  <?php while ( have_posts() ) : the_post(); ?>
                     <?php get_template_part('content', 'archive'); ?>
                  <?php endwhile;?>
               </div>
            </div>
            <?php endif;
         endif;
      endif;
   }
endif;