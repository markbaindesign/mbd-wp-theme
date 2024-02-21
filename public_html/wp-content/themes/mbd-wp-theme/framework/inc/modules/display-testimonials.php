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
                echo '<li class="testimonial">';
                bd324_get_testimonial_content($id);
                echo '</li>';
            endforeach;
            echo '</ul>';
        endif;
    }
endif;

/**
 * Single testimonial
 */
if (!function_exists('bd324_get_testimonial_content')) :
    function bd324_get_testimonial_content($id)
    {
        // vars
        $content = '';
        $post_content = get_post($id);
        $testimonial = $post_content->post_excerpt;

        // Output
        $content .= '<blockquote class="testimonial__quote">';
        $content .= apply_filters('the_excerpt', $testimonial);
        $content .= '</blockquote>';
        $content .= '<section class="testimonial__attribution">';
        $content .= bd324_get_person($id);
        $content .= '</section>';

        return $content;
    }
endif;

/**
 * Display "person" field data
 * 
 * TO DO: move this
 */
if (!function_exists('bd324_get_person')) :
    function bd324_get_person($id)
    {
        // vars
        $content = '';
        $title =        get_field('person_title',       $id);
        $first =        get_field('person_first_name',  $id);
        $last =         get_field('person_last_name',   $id);
        $role =         get_field('person_role',        $id);
        $company =      get_field('person_company',     $id);
        $link =         get_permalink($id);
        $label =        'Read more';

        $content = '<div class="person">';
        $content .= '<div class="person__name">';
        if ($title) {
            $content .= '<span class="person__title">' . $title . ' </span>';
        }
        if ($first) {
            $content .= '<span class="person__name--first">' . $first . ' </span>';
        }
        if ($last) {
            $content .= '<span class="person__name--last">' . $last . '</span>';
        }
        $content .= '</div>';
        if ($role) {
            $content .= '<div class="person__role">' . $role . '</div>';
        }
        if ($company) {
            $content .= '<div class="person__company">' . $company . '</div>';
        }
        $content .= '<div class="person__link"><a href="' . $link . '">' . $label . '</a></div>';
        $content .= '</div>';

        return $content;
    }
endif;
