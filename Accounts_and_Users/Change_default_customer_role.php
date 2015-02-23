<?php

/**
 * Assign a custom role to every new WooCommerce customer (use with care!)
*/

function woo_custom_new_customer_data( $new_customer_data ) {
	
	$new_customer_data['role'] = 'subscriber'; // change the role here
	
	return $new_customer_data;
	
}

add_filter( 'woocommerce_new_customer_data', 'woo_custom_new_customer_data');