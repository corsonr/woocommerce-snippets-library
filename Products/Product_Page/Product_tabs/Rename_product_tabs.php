<?php
	
/*
 * Allows default & custom product tabs to be renamed.
 * Remove lines starting by $tabs for tabs to be unchanged.
 */
	
add_filter( 'woocommerce_product_tabs', 'woo_rename_product_tabs', 98 );

function woo_rename_product_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'More Information' );			// Rename the description tab
	$tabs['reviews']['title'] = __( 'Ratings' );						// Rename the reviews tab
	$tabs['additional_information']['title'] = __( 'Product Data' );	// Rename the additional information tab

	return $tabs;

}