<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">

		<div class="flex-content">
					<?php

						// check if the flexible content field has rows of data
						if( have_rows('content_blocks') ):
						     // loop through the rows of data
						    while ( have_rows('content_blocks') ) : the_row();

						        if( get_row_layout() == 'text' ):

						        	$text = 		get_sub_field('col_1'); 
						        	$col_count =  	get_sub_field('columns'); 

						        	?>
						        		<div class="formatted-text flex-content-layout columns-<?php echo $col_count; ?>">
						        			<?php echo $text; ?>
						        		</div>
						        	<?php

			        		        elseif( get_row_layout() == 'callout' ):

			        		        	$text = 	get_sub_field('callout_content'); 

			        		        	?>
							        		<div class="callout-text flex-content-layout">
							        			<?php echo $text; ?>
							        		</div>

			        		        	<?php

						        elseif( get_row_layout() == 'case_study' ):

						        	$text = 	get_sub_field('case_study_text'); 
						        	$header = 	get_sub_field('case_study_header'); 

						        	?>

						        	<div class="case-study flex-content-layout">
						        		<header>
						        			<div class="meta"><?php _e('Case Study', '_criadoemsampa') ?></div>
				        					<div class="entry-title">
												<h3><?php echo $header; ?></h3>
											</div>
						        		</header>
						        		<div class="case_study_text">
						        			<?php echo $text; ?>
						        		</div>
						        	</div>

						        	<?php

						        elseif( get_row_layout() == 'quotation' ): 

						        	$text = 	get_sub_field('quote_text'); 
						        	$name = 	get_sub_field('quote_source_name');

						        	?>

						        	<div class="quotation flex-content-layout">
						        		<blockquote>
						        			<p><?php echo $text; ?></p>
						        			<footer class="meta"><?php echo $name; ?></footer>
						        		</blockquote>
						        	</div>


						        	<?php

						        
						        elseif( get_row_layout() == 'checklist' ):

			        	        	// check if the nested repeater field has rows of data
			        	        	if( have_rows('checklist_item') ):

			        				 	echo '<ul class="checklist flex-content-layout">';

			        				 	// loop through the rows of data
			        				    while ( have_rows('checklist_item') ) : the_row();

			        						$text = get_sub_field('checklist_item_text');
			        						$link = get_sub_field('checklist_item_url');

			        						?>
			        							<li><span><?php echo $text; ?></span>
			        							<a href="<?php echo $link; ?>" class="checklist-link" title=""><?php _e( 'Read More', '_criadoemsampa' ); ?></a></li>
			        						<?php

			        					endwhile;

			        					echo '</ul>';

			        				endif;		        	

						        endif;

						    endwhile;

						else :

						    // no layouts found

						endif;

					?>
		</div>
		
		<?php $code = get_field( 'quiz_shortcode' ); if ( $code ) : ?>
			<?php if ( is_user_logged_in() ): ?>
				<?php $var = do_shortcode( $code ); ?>
				<div class="quiz card">
					<div class="h4"><?php _e( 'Check your understanding:', '_criadoemsampa' ); ?></div>
					<?php echo $var; ?>
				</div>
			<?php else: ?>
				<?php get_template_part( 'modules/module', 'login-nag_quiz' ); ?>
			<?php endif; ?>
		<?php endif; ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_criadoemsampa' ),
				'after'  => '</div>',
			) );
		?>

		<div class="post-meta">
			<div id="social-sharing">
				<?php if ( function_exists( 'mbdmaster_social_sharing' ) ) {
					mbdmaster_social_sharing(); 
				} ?>
			</div>
		</div>

		<ul id="related-resources" class="no-bullets">
			<?php echo 
					get_the_term_list( 
					$post->ID, 
					'resource', 
					__( '<li>More on ', '_criadoemsampa'),
					__( '</li><li>More on ', '_criadoemsampa'), 
					'' 
				);

			?>
		</ul>
		

	</div><!-- .entry-content -->	
</article><!-- #post-## -->

<div id="paging-navigation">
	<?php mbdmaster_nav_post_to_post_menu_order(); ?>
</div>