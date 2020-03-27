<?php get_header(); ?>
<?php do_action('baindesign324_main_before'); ?>
<main id="main">
   <?php do_action('baindesign324_primary_before'); ?>
   <div id="primary">
      <?php if (have_posts()) : ?>
         <div class="section posts-grid articles">
            <div class="container">
               <?php
               // Blog title
               $post_type = get_post_type();
               echo baindesign324_title_archive($post_type); ?>
               <div class="posts__wrapper">
                  <?php while (have_posts()) : the_post(); ?>
                     <?php get_template_part('content', 'archive'); ?>
                  <?php endwhile; ?>
               </div>
            </div>
         </div>
      <?php else : ?>
         <?php get_template_part('content', 'no-content'); ?>
      <?php endif; ?>
   </div>
   <?php
   // This hook can be used to add a second
   // content section, e.g. a sidebar
   do_action('baindesign324_primary_after');
   ?>
</main>
<?php do_action('baindesign324_main_after'); ?>
<?php get_footer(); ?>