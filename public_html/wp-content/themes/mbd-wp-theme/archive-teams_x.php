<?php get_header(); ?>
<?php do_action('baindesign324_main_before'); ?>
<main id="main" class="main">
   <?php do_action('baindesign324_primary_before'); ?>
   <div id="primary">
      <div class="section posts-grid articles">
         <div class="container">
            <?php
            $post_type = 'teams';
            // Get all the taxonomies for this post type
            echo baindesign324_title_archive($post_type);
            bd324_show_team_nav();
            echo baindesign324_blog_category_filter('department');
            echo '<div class="team-wrapper">';
            $taxonomies = get_object_taxonomies((object) array('post_type' => $post_type));
            // var_dump($taxonomies);
            foreach ($taxonomies as $taxonomy) :
               // Gets every "category" (term) in this taxonomy to get the respective posts
               $terms = get_terms('department');
               // var_dump($terms);
               foreach ($terms as $term) :
                  $name = $term->name;
                  $term_id = $term->slug;
                  $posts = new WP_Query(array(
                     'taxonomy' => $taxonomy,
                     'term' => $term_id,
                     'posts_per_page' => -1
                  ));
                  // var_dump($posts);
                  if ($posts->have_posts()) : ?>
                     <div id="department-<?php echo $term_id; ?>" class="section--department department-<?php echo $term_id; ?> <?php echo $term_id; ?>">
                        <h3 class="section--department__header"><?php echo $name; ?></h3>
                        <div class="posts__wrapper">
                           <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                              <?php get_template_part('content', 'archive'); ?>
                           <?php endwhile; ?>
                        </div>
                     </div>
                  <?php endif; ?>

               <?php endforeach; ?>

            <?php endforeach; ?>


         </div>
      </div>
   </div>
   </div>
   <?php do_action('baindesign324_primary_after'); ?>
</main>
<?php do_action('baindesign324_main_after'); ?>
<?php get_footer(); ?>