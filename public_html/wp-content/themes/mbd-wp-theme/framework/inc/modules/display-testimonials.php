<?php

/**
 * Display testimonials from flex content field
 */
if (!function_exists('bd324_get_testimonials')) :
    function bd324_get_testimonials()
    {
        $post_objects = get_sub_field('testimonials');
        if ($post_objects) :
            echo '<ul class="testimonials__list">';
            foreach ($post_objects as $post_object) :
                $id = $post_object->ID;
                echo '<li class="testimonials__item">';
                bd324_get_testimonial($id);
                echo '</li>';
            endforeach;
            echo '</ul>';
        endif;
    }
endif;

/**
 * Display a single testimonial
 */
if (!function_exists('bd324_get_testimonial')) :
    function bd324_get_testimonial($id)
    {
        // vars
        $post_content = get_post($id);
        $content = $post_content->post_content;
        echo '<div class="testimonial">';
        echo '<blockquote class="testimonial__quote">';
        echo apply_filters('the_content', $content);
        echo '</blockquote>';
        echo '<section class="testimonial__attribution">';
        bd324_show_person($id);
        echo '</section>';
        echo '</div>';
    }
endif;

/**
 * Display "person" field data
 * 
 * TO DO: move this
 */
if (!function_exists('bd324_show_person')) :
    function bd324_show_person($id)
    {
        // vars
        $title =        get_field('person_title',       $id);
        $first =        get_field('person_first_name',  $id);
        $last =         get_field('person_last_name',   $id);
        $role =         get_field('person_role',        $id);
        $company =      get_field('person_company',     $id);
        $link =         get_permalink($id);
        $label =        'Read more';

        echo '<div class="person">';
        echo '<div class="person__name">';
        if ($title) {
            echo '<span class="person__title">' . $title . ' </span>';
        }
        if ($first) {
            echo '<span class="person__name--first">' . $first . ' </span>';
        }
        if ($last) {
            echo '<span class="person__name--last">' . $last . '</span>';
        }
        echo '</div>';
        if ($role) {
            echo '<div class="person__role">' . $role . '</div>';
        }
        if ($company) {
            echo '<div class="person__company">' . $company . '</div>';
        }
        echo '<div class="person__link"><a href="' . $link . '">' . $label . '</a></div>';
        echo '</div>';
    }
endif;
