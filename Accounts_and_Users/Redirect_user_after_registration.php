<?php

/**
 * Redirect customer after they register
*/

function woo_registration_redirect() {
	
	return 'http://your-url.here'; // URL to redirect your customer after registration
	
}

add_filter( 'woocommerce_registration_redirect' , 'woo_registration_redirect' );