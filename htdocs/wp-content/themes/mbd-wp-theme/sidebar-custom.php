<div id="secondary" role="complementary">
		<div class="entry-meta">
			<?php
				if ( is_singular( 'portfolio_item' ) ) : ?>
				<ul>
					<?php // Project name
						if ( get_field('project_name') ) : ?>
						<li><label>Project</label><?php the_field('project_name'); ?></li>
					<?php endif; ?>
					
					<?php // Project date
						if ( get_field('project_date') ) : ?>
						<li><label>Date</label><?php 
						$date = DateTime::createFromFormat('Ymd', get_field('project_date'));
						echo $date->format('M, Y'); 
					?></li>
					<?php endif; ?>

					<?php // Client name
						if ( get_field('client_name') ) : ?>
						<li><label>Client</label><?php the_field('client_name'); ?></li>
						<?php endif; ?>

					<?php // Project link
						if ( get_field('project_link') ) : ?>
						<li><label>Link</label><a href="<?php the_field('project_link'); ?>"><?php the_field('project_link_label'); ?></a></li>
						<?php endif; ?>

				</ul>

				<?php elseif ( is_404() | is_search() ) : ?>
					<ul>
						<li>
							<label>Recent posts</label>
							<ul>
						<?php
							$args = array( 'numberposts' => '5' );	
							$recent_posts = wp_get_recent_posts( $args);
							foreach( $recent_posts as $recent ){
								echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
							}
						?></ul>
						</li>
					</ul>

				

				<?php else: ?>



				<?php	_mbbasetheme_posted_on(); ?>		
				<?php	baindesign324_post_meta(); ?>


				<?php endif; ?>
			</div><!-- .entry-meta -->	
	</div><!-- #secondary -->
