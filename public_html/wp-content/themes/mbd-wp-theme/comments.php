<?php
	if ( post_password_required() ) {
		return;
	}
	baindesign324_comments_list();
	baindesign324_comments_form(); 
?>