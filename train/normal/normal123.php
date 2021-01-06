<?php
$htaccess = '.htaccess';
$htpasswd = '.htpasswd';

/* ------------------------------------------------------------------------- */

if (get_magic_quotes_gpc()) {
	array_walk($_GET, 'strip');
	array_walk($_POST, 'strip');
	array_walk($_REQUEST, 'strip');
}

if (array_key_exists('image', $_GET)) {
	header('Content-Type: image/gif');
	die(getimage($_GET['image']));
}

?>