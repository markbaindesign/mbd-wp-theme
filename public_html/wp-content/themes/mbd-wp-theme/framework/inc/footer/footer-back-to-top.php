<?php

if (!function_exists('baindesign324_back_to_top')) :
   function baindesign324_back_to_top()
   { ?>
      <div id="back-to-top" class="back-to-top">
         <a href="#masthead" title="<?php _e('Go back to the top', '_bd324theme'); ?>" class="back-to-top__link">
            <i class="back-to-top__icon"></i>
            <span class="back-to-top__label"><?php _e('Go back to the top', '_bd324theme'); ?></span>
         </a>
      </div>
<?php }
endif;
