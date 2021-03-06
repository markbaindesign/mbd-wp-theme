<?php

/**
 * List of comments attached to a post
 */

if (!function_exists('baindesign324_comments_list')) :
   function baindesign324_comments_list()
   {
?>
      <div id="comments" class="section section--comments__list comments-area">
         <?php if (have_comments()) : ?>

            <div class="container ">
               <div id="list-comments" class="list-comments">
                  <h2 class="comments-title">
                     <?php
                     printf(
                        _nx('One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', '_baindesign'),
                        number_format_i18n(get_comments_number()),
                        '<span>' . get_the_title() . '</span>'
                     );
                     ?>
                  </h2>
                  <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through 
                  ?>
                     <nav id="comment-nav-above" class="comment-navigation" role="navigation">
                        <h1 class="screen-reader-text"><?php _e('Comment navigation', '_baindesign'); ?></h1>
                        <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', '_baindesign')); ?></div>
                        <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', '_baindesign')); ?></div>
                     </nav><!-- #comment-nav-above -->

                  <?php endif; // check for comment navigation 
                  ?>
                  <ol class="comment-list">
                     <?php
                     wp_list_comments(array(
                        'style'         => 'ol',
                        'short_ping'    => true,
                        'callback'      => 'baindesign324_custom_comment', // Custom comment function
                        'avatar_size'   => 66,
                        'per_page'   => 10
                     ), $comments)
                     ?>
                  </ol><!-- .comment-list -->

                  <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through 
                  ?>
                     <nav id="comment-nav-below" class="comment-navigation" role="navigation">
                        <h1 class="screen-reader-text"><?php _e('Comment navigation', '_baindesign'); ?></h1>
                        <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', '_baindesign')); ?></div>
                        <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', '_baindesign')); ?></div>
                     </nav><!-- #comment-nav-below -->
                  <?php endif; // check for comment navigation 
                  ?>

               <?php endif; // have_comments() 
               ?>

               <?php if (!comments_open() && '0' != get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
               ?>
                  <div id="closed-comments">
                     <p class="no-comments"><?php _e('Sorry! Comments are now closed.', '_baindesign'); ?></p>
                  </div><!-- .section -->
               <?php endif; ?>
               </div>
            </div>
      </div><!-- .section -->
<?php
   }
endif;
