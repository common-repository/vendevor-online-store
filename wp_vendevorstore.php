<?php
/*
Plugin Name: Vendevor
Plugin URI: http://vendevor.com/wordpress/wp_vendevor.zip
Description: Easily add an ecommerce store to Wordpress using Vendevor, and immediately accept credit cards and deposit sales straight to your bank account.
Version: 1.0.0
Author: Vendevor
*/

// Shortcode implementation
function retrieve_vendevor_store($attribs) {
	extract(shortcode_atts(array('authcode' => ''), $attribs));
	return '<div id="'.$authcode.'" class="vndvr-store" style="height:450px;"></div><script type="text/javascript" src="//vendevor.com/js/renderStore.js"></script>';
}

add_shortcode('vendevor','retrieve_vendevor_store');
?>