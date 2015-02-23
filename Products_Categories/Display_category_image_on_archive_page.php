<?php

/**
 * Add categorye image to categories archive page
 */
 
function woo_add_category_image() {
	
    if ( is_product_category() ){
	    global $wp_query;
	    
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
	    if ( $image ) {
		    echo '<img src="' . $image . '" alt="" />';
		}
	}
	
}

add_action( 'woocommerce_archive_description', 'woo_add_category_image', 2 );