<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package _mbdmaster
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">




	<?php if ( have_comments() ) : ?>

		<!-- A list of comments -->
		<div id="list-comments">

				<h2 class="comments-title">
			<?php
				printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', '_mbdmaster' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', '_mbdmaster' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', '_mbdmaster' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', '_mbdmaster' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      	=> 'ol',
					'short_ping' 	=> true,
					'callback'      => 'mbdmaster_custom_comment', // Custom comment function
					'avatar_size'	=> 66,
					'per_page'	=> 10
				), $comments )
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', '_mbdmaster' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', '_mbdmaster' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', '_mbdmaster' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>
		</div><!-- .section -->
	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<div id="closed-comments" >

				<p class="no-comments"><?php _e( 'Sorry! Comments are now closed.', '_mbdmaster' ); ?></p>

		</div><!-- .section -->

	<?php endif; ?>


<!-- The comment form -->
<div id="form-comments" >

<?php 
			
			$comment_args = array(
				//'comment_notes_before' => '<p>And remember:</p> <blockquote><p>Brevity is the soul of wit</p></blockquote>',				
				'comment_notes_after' => '',
				  'title_reply'       => __( 'Leave a comment', '_mbdmaster' ),
				  'title_reply_to'    => __( 'Leave a Reply to %s', '_mbdmaster' ),
				  'cancel_reply_link' => __( 'Cancel Reply', '_mbdmaster' ),
				  'label_submit'      => __( 'Post Comment', '_mbdmaster' ),
				);

	comment_form( $comment_args );
?>
</div><!-- .section -->
</div><!-- #comments .section -->