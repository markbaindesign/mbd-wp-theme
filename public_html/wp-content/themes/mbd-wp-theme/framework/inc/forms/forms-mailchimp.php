<?php

/**
 * Mailchip Form Section
 */

if (!function_exists('bd24_mailchimp_form_section')) :
   function bd324_mailchimp_form_section()
   {
      // Check if there's a mailing list set up

      $list_global = get_field('mailing_list', 'option');
      $action_global = $list_global['mailing_list_url'];

      $list_flex = get_sub_field('mailing_list_flex');
      $action_flex = $list_flex['mailing_list_url'];

      if ( !$action_flex && !$action_global ) {
         return; // No action, return!
      }

      $classes = array(
         'form',
         'form--mailchimp',
         'form__mailchimp__full',
      );
      baindesign324_generic_wrapper(NULL, $classes, NULL);
      baindesign324_mailchimp_form();
      baindesign324_generic_wrapper(NULL, NULL, 'close');
   }
endif;

/**
 * Mailchip Form
 */
if (!function_exists('baindesign324_mailchimp_form')) :
   function baindesign324_mailchimp_form()
   {

      // Global Mailing List settings (Defaults)
      $list_global = get_field('mailing_list', 'option');
      $header_global = $list_global['mailing_list_header'];
      $action_global = $list_global['mailing_list_url'];

      // Flex Content Mailing List settings
      $list_flex = get_sub_field('mailing_list_flex');
      $header_flex = $list_flex['mailing_list_header'];
      $action_flex = $list_flex['mailing_list_url'];

      // Set $header_content
      if ($header_flex) {
         $header_content = $header_flex;
      } elseif ($header_global) {
         $header_content = $header_global;
      } else {
         $header_content = 'Get Updates';
      }

      // Set $action
      if ($action_flex) {
         $action = $action_flex;
      } elseif ($action_global) {
         $action = $action_global;
      } else {
         return; // No action, return!
      }
?>
      <div class="form form__mailchimp">
         <header class="form__mailchimp__header">
            <h5><?php echo esc_html__($header_content, '_baindesign') ?></h5>
         </header>
         <div id="mc_embed_signup">
            <?php // TO DO replace with value from options 
            ?>
            <form action="<?php echo esc_html($action); ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
               <div class="mc-field-group mc-field-group__first">
                  <label for="mce-FNAME">First Name </label>
                  <input type="text" value="" placeholder="Your First Name" name="FNAME" class="" id="mce-FNAME">
               </div>
               <div class="mc-field-group mc-field-group__last">
                  <label for="mce-LNAME">Last Name </label>
                  <input type="text" value="" placeholder="Your Last Name" name="LNAME" class="" id="mce-LNAME">
               </div>
               <div class="mc-field-group mc-field-group__email">
                  <label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
                  </label>
                  <input type="email" value="" placeholder="Your Email" name="EMAIL" class="required email" id="mce-EMAIL">
               </div>



               <div id="mce-responses" class="clear">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
               </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

               <div style="position: absolute; left: -5000px;"><input type="text" name="b_e7958e37f3d67cd9c98e24f6c_7b25b42e09" tabindex="-1" value=""></div>


               <div class="clear">
                  <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
               </div>
            </form>
         </div>
         <!--End mc_embed_signup-->
         <footer><?php _e('You\'ll never get spam from me, and you can unsubscribe easily at any time.', '_baindesign'); ?></footer>
      </div>
<?php }
endif;
