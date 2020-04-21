<?php

/**
 * Branding: simple text title
 */

if (!function_exists('baindesign324_site_branding_title')) :
   function baindesign324_site_branding_title()
   {
      // Vars
      $blog_title = get_bloginfo('name');
      $custom_logo_id = get_theme_mod('custom_logo');
      $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
      $default_logo_url = get_stylesheet_directory_uri() . '/assets/images/logo.png';
      if ($custom_logo_url) {
         $logo_url = $custom_logo_url;
      } else {
         $logo_url = $default_logo_url;
      }

?>

      <div class="site-branding">
         <div class="site-logo site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" title="<?php echo $blog_title; ?> | Home">
               <span class="branding-title">
                  <img class="site-title__logo" src="<?php echo $logo_url; ?>" alt="<?php echo $blog_title; ?>">
               </span>
            </a>
         </div><!-- .site-branding -->
      </div><!-- .site-branding -->

<?php  }
endif;
