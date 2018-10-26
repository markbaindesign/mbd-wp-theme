<?php 
	
	include_once("Tax-meta-class/Tax-meta-class.php");

	
	if (is_admin()){
	  /* 
	   * prefix of meta keys, optional
	   */
	  $prefix = 'mbd_';
	  /* 
	   * configure your meta box
	   */
	  $config = array(
	    'id' => 'images_meta_box',          // meta box id, unique per meta box
	    'title' => 'Images',          // meta box title
	    'pages' => array('type'),        // taxonomy name, accept categories, post_tag and custom taxonomies
	    'context' => 'normal',            // where the meta box appear: normal (default), advanced, side; optional
	    'fields' => array(),            // list of meta fields (can be added by field arrays)
	    'local_images' => true,          // Use local or hosted images (meta box images for add/remove)
	    'use_with_theme' => false          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
	  );
	  
	  
	  /*
	   * Initiate your meta box
	   */
	  $my_meta =  new Tax_Meta_Class($config);
	  
	  /*
	   * Add fields to your meta box
	   */

	  
	  //Image fields
	  $my_meta->addImage($prefix.'thumb_image_field_id',array('name'=> __('Grid Thumbnail Image ','tax-meta')));
	  
	  /*
	   * Don't Forget to Close up the meta box declaration
	   */
	  //Finish Meta Box Declaration
	  $my_meta->Finish();
	}
?>