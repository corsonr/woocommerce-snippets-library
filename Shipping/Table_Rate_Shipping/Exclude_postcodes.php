<?php
	
/*
 * Exclude certain zip codes (or post codes) from WooCommerce shipping 
 * 
 * @return array $available_methods 
 */
 
function woo_dont_ship_zipcodes( $available_methods ) {

	global $woocommerce;

	$excluded_zips = array( '80070','80071','80072','80073','80074','80075','80076','80077','80079' ); // define postcodes to exclude here

	if( in_array( $woocommerce->customer->get_shipping_postcode(), $excluded_zips ) ) {
		// Empty the $available_methods array
		$available_methods = array();
	} 

	return $available_methods;
}

add_filter( 'woocommerce_package_rates', 'woo_dont_ship_zipcodes', 10 );