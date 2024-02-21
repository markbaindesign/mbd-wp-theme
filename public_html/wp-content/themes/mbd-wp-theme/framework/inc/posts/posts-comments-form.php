<?php

/**
 * Comments form
 */

if (!function_exists('baindesign324_comments_form')) :
   function baindesign324_comments_form()
   {
?>
      <div id="form-comments" class="section section--comments__form">
         <div class="container">
               <?php
               $comment_args = array(
                  //'comment_notes_before' => '<p>And remember:</p> <blockquote><p>Brevity is the soul of wit</p></blockquote>',				
                  'comment_notes_after' => '',
                  'title_reply'       => __('Leave a comment', '_baindesign'),
                  'title_reply_to'    => __('Leave a Reply to %s', '_baindesign'),
                  'cancel_reply_link' => __('X', '_baindesign'),
                  'label_submit'      => __('Post Comment', '_baindesign'),
               );
               comment_form($comment_args);
               ?>
         </div>
      </div>
<?php
   }
endif;
