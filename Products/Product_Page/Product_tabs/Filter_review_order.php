<?php

/*
 * Displays reviews in reverse chronological order
 */

add_filter( 'woocommerce_product_review_list_args', 'prefix_product_review_list_args', 100 );

function prefix_product_review_list_args( $args ) {
	$args['reverse_top_level'] = true;
	return $args;
}