<?php

if (!function_exists('bd324_cpt_person_image')) :
   function bd324_cpt_person_image($id)
   {
      $post_link = get_the_permalink($id);
      $thumb_id = get_post_thumbnail_id($id);
      $image_url_array = wp_get_attachment_image_src($thumb_id, 'latest_post', FALSE);
      $image_url = $image_url_array[0];

?>
      <?php if (has_post_thumbnail($id)) : ?>
         <section class="person__image">
            <a href="<?php echo $post_link; ?>">
               <img src="<?php echo $image_url ?>">
            </a>
         </section>
      <?php endif; ?>
   <?php }
endif;

if (!function_exists('bd324_cpt_person_name')) :
   function bd324_cpt_person_name($id)
   {
      $post_link = get_the_permalink($id);
   ?>
      <?php if (has_post_thumbnail($id)) : ?>
         <section class="person__name">
            <a href="<?php echo $post_link; ?>">
               <span class="person__name__title"><?php the_field('person_title', $id); ?></span>
               <span class="person__name__first"><?php the_field('person_first_name', $id); ?></span>
               <span class="person__name__last"><?php the_field('person_last_name', $id); ?></span>
            </a>
         </section>
      <?php endif; ?>
   <?php }
endif;

if (!function_exists('bd324_cpt_person_meta')) :
   function bd324_cpt_person_meta($id)
   {
      $post_link = get_the_permalink($id);
   ?>
      <?php if (has_post_thumbnail($id)) : ?>
         <section class="person__meta">
            <div class="person__meta__role"><?php the_field('person_role', $id); ?></div>
            <div class="person__meta__company"><?php the_field('person_company', $id); ?></div>
            <div class="person__meta__link"><a href="<?php echo $post_link; ?>">Link</a></div>
         </section>
      <?php endif; ?>
   <?php }
endif;

if (!function_exists('bd324_cpt_person_text')) :
   function bd324_cpt_person_text($id)
   {
      $post_content = get_post($id);
      $content = $post_content->post_content;
   ?>
      <section class="person__text">
         <?php echo $content; ?>
      </section>
<?php }
endif;
