<?php

/** 
 * Woocommerce 
 **/

/** 
 * Move excerpt above price 
 **/
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 20 );
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_meta', 5 );
/** 
 * Move price above summary and rating
 **/
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
// add_action( 'woocommerce_before_single_product', 'woocommerce_template_single_price', 15 );
/** 
 * Move rating above summary and below price
 **/
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_before_single_product', 'woocommerce_template_single_rating', 15 );
/** 
 * Remove sidebar 
 **/
// remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );


function baindesign34_remove_woocommerce_actions() {

	/** 
	 * Remove sidebar 
	 **/
     remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

     /** 
      * Remove tabs
      **/
     remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

	/** 
	 * Woocommerce -- Product Archive
	 **/

     /** 
      * Remove results count
      **/
     remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

     /** 
      * Remove ordering
      **/
     remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
}

add_action('init', 'baindesign34_remove_woocommerce_actions' );

/** 
 * Woocommerce -- Tabs
 **/

/** 
 * Add description
 **/
function woocommerce_template_product_description() {
    woocommerce_get_template( 'single-product/tabs/description.php' );
}
/** 
 * Add additional info
 **/
function woocommerce_template_additional_info() {
    woocommerce_get_template( 'single-product/tabs/additional-information.php' );
}
/** 
 * Move full description after summary
 **/
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_product_description', 60 );
/** 
 * Move additional info after full description
 **/
// add_action( 'woocommerce_single_product_summary', 'woocommerce_template_additional_info', 70 );
/** 
 * Repeat add to cart button after full description
 **/
// add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 80 );

// Custom content

function baindesign34_price_intro() {
  $content ='<div class="price-intro">Subscribe for</div>';
  echo $content;
}
// add_action( 'woocommerce_single_product_summary', 'baindesign34_price_intro', 5 );
// add_action( 'woocommerce_single_product_summary', 'baindesign34_price_intro', 3 );

// Remove the product description Title
add_filter( 'woocommerce_product_description_heading', 'remove_product_description_heading' );
function remove_product_description_heading() {
 return '';
}

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );