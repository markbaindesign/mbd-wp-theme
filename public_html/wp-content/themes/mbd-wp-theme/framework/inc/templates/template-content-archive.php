<?php

/**
 * Person 
 */

if (!function_exists('bd_person_content')) : function bd_person_content($id)
	{
		$post_link = get_the_permalink($id);
?>
		<article id="post-<?php echo $id; ?>" class="person">
			<h2 class="person__name">
				<a href="<?php echo $post_link; ?>">
					<span class="person__name__title"><?php the_field('person_title', $id); ?></span>
					<span class="person__name__first"><?php the_field('person_first_name', $id); ?></span>
					<span class="person__name__last"><?php the_field('person_last_name', $id); ?></span>
				</a>
			</h2>
			
			<p><?php bd324_cpt_person_image($id); ?></p>
		</article>
	<?php }
endif;

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
		$content.= $title;
		$content.= ' </span>';
		$content.= '<span class="person__name__first">';
		$content.= $first;
		$content.= ' </span>';
		$content.= '<span class="person__name__last">';
		$content.= $last;
		$content.= '</span>';

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
		if ($role){
			$content = '<span class="person__meta__role">';
			$content.= $role;
			$content.= '</span>';
		}
		// Company
		if ($company){
			$content = '<span class="person__meta__company">';
			$content.= $company;
			$content.= '</span>';
		}
		return $role;
}
endif;