<?php
	
/*
 * Add a new custom product tab.
 * woo_new_product_tab() register the new custom tab.
 * woo_new_product_tab_content() outputs the tab content.
 */
	
add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );

function woo_new_product_tab( $tabs ) {
	
	// Adds the new tab
	$tabs['test_tab'] = array(
		'title' 	=> __( 'New Product Tab', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_new_product_tab_content'
	);

	return $tabs;
}

function woo_new_product_tab_content() {

	// The new tab content
	echo '<h2>New Product Tab</h2>';
	echo '<p>Here\'s your new product tab.</p>';
	
}