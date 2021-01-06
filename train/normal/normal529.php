<?php
/**
 * Server-side file upload handler from wp-plupload or other asynchronous upload methods.
 *
 * @package WordPress
 * @subpackage Administration
 */

if ( isset( $_REQUEST['action'] ) && 'upload-attachment' === $_REQUEST['action'] ) {
	define( 'DOING_AJAX', true );
}

if ( ! defined( 'WP_ADMIN' ) ) {
	define( 'WP_ADMIN', true );
}


require_once( ABSPATH . 'wp-load.php' );
require_once( ABSPATH . 'wp-admin/admin.php' );

if ( $_REQUEST['short'] ) {
	// Short form response - attachment ID only.
	echo $id;
}
?>
