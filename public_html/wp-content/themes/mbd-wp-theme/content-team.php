<?php
// Template for displaying content for a Team
?>
<?php bd324_show_cover(); ?>
<?php do_action('baindesign324_article_before'); ?>
<?php echo '<div class="flex-content-wrapper">'; ?>
<?php do_action('baindesign324_content_before'); ?>
<?php
$classes = array(
   'section--not-flex'
);
baindesign324_generic_wrapper(NULL, $classes, NULL); ?>
<?php the_content(); ?>
<div class="team__wrapper">
   <h2><?php the_title(); ?></h2>
   <ul class="team">
      <?php if (get_field('members')) : ?>
         <?php while (the_repeater_field('members')) : ?>
            <?php

            $tm_id = get_sub_field('team-member');
            // Post data
            $name       = bd324_cpt_person_name($tm_id);
            $image      = get_the_post_thumbnail_url($tm_id);
            $bio        = get_the_excerpt($tm_id);
            $url        = get_the_permalink($tm_id);

            // Role
            $role_ids = get_sub_field('team_role'); // returns an array
            // var_dump($role_id);
            foreach ($role_ids as $role_id) {
               $term = get_term($role_id);
               $role = $term->name;
            }


            echo bd324_kvp_team_member_card($name, $role, $image, $url, $bio);

            ?>


         <?php endwhile; ?>
      <?php endif; ?>
   </ul>
</div>
<?php baindesign324_generic_wrapper(NULL, NULL, 'close');
do_action('baindesign324_content_after');
echo '</div>';
