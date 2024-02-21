<?php

/**
 * Search results 
 */

if (!function_exists('bd324_search_results_content')) :
	function bd324_search_results_content($id)
	{
		$post_link = get_the_permalink($id);
?>
		<article id="post-<?php echo $id; ?>" class="post">
			<h2><a href="<?php echo $post_link; ?>"><?php echo get_the_title(); ?></a></h2>
			<p><?php echo get_the_excerpt(); ?></p>
		</article>
<?php }
endif;

/**
 * Person name
 */

if (!function_exists('bd324_person_name')) : function bd324_person_name($id = NULL)
	{
		// Vars
		$title =			get_field('person_title', $id);
		$first =			get_field('person_first_name', $id);
		$last =			get_field('person_last_name', $id);

		$content = '<span class="person__name__title">';
		$content .= $title;
		$content .= ' </span>';
		$content .= '<span class="person__name__first">';
		$content .= $first;
		$content .= ' </span>';
		$content .= '<span class="person__name__last">';
		$content .= $last;
		$content .= '</span>';

		return $content;
	}
endif;


/**
 * Person meta
 */

if (!function_exists('bd324_get_the_person_meta')) : function bd324_get_the_person_meta($id = NULL)
	{
		// Vars
		$role = get_field('person_role', $id);
		$company = get_field('person_company', $id);

		// Role
		if ($role) {
			$content = '<span class="person__meta__role">';
			$content .= $role;
			$content .= '</span>';
		}
		// Company
		if ($company) {
			$content = '<span class="person__meta__company">';
			$content .= $company;
			$content .= '</span>';
		}
		return $role;
	}
endif;
