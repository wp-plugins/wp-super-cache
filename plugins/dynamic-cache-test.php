<?php

/*
 * A function that uses the wpsc_cachedata filter to add a small message
 * and the current server time to every web page. The time increments
 * on every reload.
 *
 * On the Advanced Settings page enable "Enable dynamic caching".
 *
 * dynamic_cache_test_init()
 * This function is the first one to be called. This function hooks 
 * dynamic_cache_test_template() to the WordPress action, wp_footer.
 * This script is loaded before WordPress is and the add_action() 
 * function isn't defined at this time. 
 * This init function hooks onto the cache action "add_cacheaction"
 * that fires after WordPress (and add_action) is loaded.
 *
 *
 * dynamic_cache_test_template_tag()
 * This function hooks on to wp_footer and displays the secret template 
 * tag that will be replaced by our dynamic content on each page view.
 *
 *
 * dynamic_cache_test_filter()
 * This function hooks on to the filter through which all the cached data
 * sent to visitors is sent.
 * In this simple example the template tag "HELLOWORLD12345" is replaced
 * by a html comment containing the text "Hello world at " and the 
 * current server time. If you want to use the output of a WordPress
 * plugin or command you must enable "late init" on the settings page.
 * Each time you reload the cached page this time will change. View the
 * page source to examine this text.
 *
 *
 * **** MAKE SURE YOU KEEP THE TEMPLATE TAG SECRET ****
 *
 */


/*
 * Uncomment the code below, enable dynamic caching and clear the cache.
 */


/*
function dynamic_cache_test_filter( &$cachedata) {
	return str_replace( "HELLOWORLD12345", "<!-- Hello world at " . date( 'H:i:s' ) . " -->", $cachedata );
}
add_cacheaction( 'wpsc_cachedata', 'dynamic_cache_test_filter' );

function dynamic_cache_test_template_tag() {
	echo "HELLOWORLD12345"; // This is the template tag
}

function dynamic_cache_test_init() {
	add_action( 'wp_footer', 'dynamic_cache_test_template_tag' );
}
add_cacheaction( 'add_cacheaction', 'dynamic_cache_test_init' );
*/

?>
