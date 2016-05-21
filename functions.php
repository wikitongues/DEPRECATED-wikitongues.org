<?php 

/*
 * Hide admin bar on site front-end.
 */

show_admin_bar( false );

/*
 * Register theme for thumbnails.
 */

add_theme_support( 'post-thumbnails' );

/*
 * Parse purchase_link variable to make sure it has 'http' prefix.
 */

/*function echo_link( $url ) {

	if ( strpos( $url, 'http' ) !== false ) : 
		$url;

		$url; 
	else : 
		$url = 'http://' . $url; 
	
		$url;
	endif;

}*/

?>