<?php

/**
 * Defines the default shipping mthod within USPS
 */

function woo_set_usps_default_method() {
	
	if( is_checkout() ) :
	?>
	<script>
	jQuery(function() {
		jQuery('input:radio[name="shipping_method[0]"]').filter('[value="usps:flat_rate_box_express"]').attr('checked', true); // replace "flat_rate_box_express" by the method to default
	});
	</script>
	<?php
	endif;
}

add_filter( 'wp_footer' , 'woo_set_usps_default_method' );