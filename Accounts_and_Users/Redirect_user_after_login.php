<?php

/**
 * Redirect customer after they log-in
*/

add_filter('woocommerce_login_redirect', 'woo_login_redirect');

function woo_login_redirect( $redirect_to ) {
	
    return 'http://your-url.here'; // URL to redirect your customer after login
    
}