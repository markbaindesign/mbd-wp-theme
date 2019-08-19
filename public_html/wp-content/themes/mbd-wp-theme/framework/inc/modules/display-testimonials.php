<?php

/**
 * Display testimonials module
 */

if ( ! function_exists( 'baindesign324_display_testimonials' ) ) :
	function baindesign324_display_testimonials() {

/*
*  Loop through post objects (assuming this is a multi-select field) ( don't setup postdata )
*  Using this method, the $post object is never changed so all functions need a seccond parameter of the post ID in question.
*/

$post_objects = get_sub_field('testimonials');

if( $post_objects ): ?>
    <ul>
    <?php foreach( $post_objects as $post_object): 
			$id = $post_object->ID;
			$post_content = get_post($id);
			$content = $post_content->post_content;
			

    	?>
        <li>
            <blockquote><?php echo apply_filters('the_content', $content); ?></blockquote>
            <?php echo get_the_post_thumbnail( $id, 'thumbnail'); ?>

            <?php // TODO Make this a function ?>
            
            <div class="person__name">
                <span class="person__title"><?php the_field('person_title', $id); ?></span>
	            <span class="person__name--first"><?php the_field('person_first_name', $id); ?></span>
	            <span class="person__name--last"><?php the_field('person_last_name', $id); ?></span>
            </div>
            <div class="person__role"><?php the_field('person_role', $id); ?></div>
            <div class="person__company"><?php the_field('person_company', $id); ?></div>
            <div class="person__link"><a href="<?php echo get_permalink($id); ?>">Link</a></div>

        </li>
    <?php endforeach; ?>
    </ul>
<?php endif;
}
endif;