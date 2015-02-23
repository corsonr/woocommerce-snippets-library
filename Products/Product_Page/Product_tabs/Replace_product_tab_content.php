<?php
	
/*
 * Replace the content of an existing tab.
 * woo_custom_description_tab() tells WooCommerce to use a custom callback
 * within the "description" tab (available values: description, reviews, additional_information).
 * woo_custom_description_tab_content() outputs your own content in the "description" tab.
 */
	
add_filter( 'woocommerce_product_tabs', 'woo_custom_description_tab', 98 );

function woo_custom_description_tab( $tabs ) {

	$tabs['description']['callback'] = 'woo_custom_description_tab_content';	// Custom description callback

	return $tabs;
}

function woo_custom_description_tab_content() {
	
	echo '<h2>Custom Description</h2>';
	echo '<p>Here\'s a custom description</p>';
}