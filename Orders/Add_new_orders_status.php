<?php

/*
 * Add a new custom product tab.
 * Replace "Status Name" by your new order status name.
 */
 
function woo_register_my_new_order_statuses() {
	
	register_post_status( 'wc-status-name', array(
		'label'                     => _x( 'Status Name', 'Order status', 'textdomain' ),
		'public'                    => true,
		'exclude_from_search'       => false,
		'show_in_admin_all_list'    => true,
		'show_in_admin_status_list' => true,
		'label_count'               => _n_noop( 'Status name <span class="count">(%s)</span>', 'Status names <span class="count">(%s)</span>', 'textdomain' )
	) );
	
}

add_action( 'init', 'register_my_new_order_statuses' );

// Register in wc_order_statuses.
function my_new_wc_order_statuses( $order_statuses ) {
	
	$order_statuses['wc-status-name'] = _x( 'Status Name', 'Order status', 'textdomain' );

	return $order_statuses;
}

add_filter( 'wc_order_statuses', 'my_new_wc_order_statuses' );