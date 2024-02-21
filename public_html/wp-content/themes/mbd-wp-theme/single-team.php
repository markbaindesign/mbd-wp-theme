<?php get_header(); ?>
<?php do_action('baindesign324_main_before'); ?>
<main id="main">
   <?php do_action('baindesign324_primary_before'); ?>
   <div id="primary">
      <?php if (have_posts()) : ?>
         <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('content'); ?>
         <?php endwhile; ?>
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