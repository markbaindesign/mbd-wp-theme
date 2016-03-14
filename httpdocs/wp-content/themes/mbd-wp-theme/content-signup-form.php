<h2><i class="fa fa-envelope"></i> <?php if( get_field('signup_header') ) {
					echo get_field('signup_header'); 
				} ?></h2>
<p><?php if( get_field('signup_pre-form_text') ) {
					echo get_field('signup_pre-form_text'); 
				} ?></p>
<form action="//isolarworkx.us10.list-manage.com/subscribe/post?u=b84767c355176198d020bd6e0&amp;id=25f93a569a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<p class="username"> 
							  <label for="usernamesignup" class="uname" data-icon="u"><i class="fa fa-user"></i> <?php if( get_field('signup_first_name_label') ) {
					echo get_field('signup_first_name_label'); 
				} ?></label>
							  <input id="usernamesignup" name="FNAME" required="required" type="text" placeholder="<?php if( get_field('signup_firstname_placeholder') ) {
					echo get_field('signup_firstname_placeholder'); 
				} ?>" />
						 </p>

						 <p class="username-last"> 
							  <label for="username-lastsignup" class="uname" data-icon="u"><i class="fa fa-user"></i> <?php if( get_field('signup_last_name_label') ) {
					echo get_field('signup_last_name_label'); 
				} ?></label>
							  <input id="username-lastsignup" name="LNAME" required="required" type="text" placeholder="<?php if( get_field('signup_lastname_placeholder') ) {
					echo get_field('signup_lastname_placeholder'); 
				} ?>" />
						 </p>						 

						 <p class="emailaddress"> 
							  <label for="emailsignup" class="youmail" data-icon="e" ><i class="fa fa-envelope"></i> <?php if( get_field('signup_email_label') ) {
					echo get_field('signup_email_label'); 
				} ?></label>
							  <input id="emailsignup" name="EMAIL" required="required" type="email" placeholder="<?php if( get_field('signup_email_placeholder') ) {
					echo get_field('signup_email_placeholder'); 
				} ?>"/> 
						</p>
<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    

						 <p class="signin"> 
						 <input type="submit" class="cta button cta-primary" value="<?php if( get_field('signup_button_text') ) {
					echo get_field('signup_button_text'); 
				} ?>"/><!-- <span> man or find out more &rarr;</span> -->						
						 </p>

					</form> 
					<p class="post-form-content"><?php if( get_field('signup_post-form_text') ) {
					echo get_field('signup_post-form_text'); 
				} ?></p>
					

